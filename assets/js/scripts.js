// ヘッダーの追従フラグ
const isHeaderFixed = true;

// ハンバーガーメニューopenクラス
const openClass = 'is-menu-open';

// jQuery
jQuery(function($) {

    // スムーズスクロール
    function scrollToHash(hash) {
        if (!hash || hash === '#') return;

        const $target = $(hash);
        if (!$target.length) return;

        let headerHeight = 0;
        if (isHeaderFixed) {
            headerHeight = $('.is-header').outerHeight() || 0;
        }

        const position = $target.offset().top - headerHeight;

        $('html, body').stop(true).animate({ scrollTop: position }, 500, 'swing');
    }

    // #ハッシュありのリンクを踏んだ時
    $('a[href*="#"]').on('click', function (e) {
        const hash = this.hash; // "#works" など
        if (!hash || hash === '#') return;

        // クリックされたリンクが「同一ページ」なら、遷移を止めてスムーズスクロール
        // （相対/絶対URLの両対応）
        const linkUrl = new URL(this.href, location.href);
        const currentUrl = new URL(location.href);

        const isSamePage =
            linkUrl.origin === currentUrl.origin &&
            linkUrl.pathname.replace(/\/$/, '') === currentUrl.pathname.replace(/\/$/, '');

        if (!isSamePage) {
            // 別ページなら通常遷移（遷移先でハッシュ処理したいなら別途 load 側で対応）
            return;
        }

        e.preventDefault();

        // ハンバーガーメニューが開いている場合は閉じる
        if ($('body').hasClass(openClass)) {
            $('body').removeClass(openClass);
            if (typeof startScroll === 'function') {
                startScroll();
            }
        }

        // URLのハッシュも更新（戻る/共有に優しい）
        //history.pushState(null, '', hash);

        scrollToHash(hash);
    });


    // 別ページからの#ハッシュありリンクを踏んだ時
    var hash = location.hash;
    if(hash) {
        scrollToHash(hash);
    }


    // メニューボタン押下
    $('.is-menu-btn').click(function(){
        if(!$('body').hasClass(openClass)) {
            $('body').addClass(openClass);
            //stopScroll();
        } else {
            $('body').removeClass(openClass);
            //startScroll();
        }
    });


    // スクロールで要素の表示切り替え
    $(window).on('load scroll resize', function() {
        const scroll = $(this).scrollTop();
        const pagetop = $('.is-pagetop');

        if(scroll > 200) {
            pagetop.addClass('is-pagetop--show');
        } else {
            pagetop.removeClass('is-pagetop--show');
        }
    });

    // アコーディオン開閉
    $('.is-toggle-btn').on('click', function(){
        
        if($(this).hasClass('is-toggle-btn--open')) {
            $(this).removeClass('is-toggle-btn--open');
            $(this).next('.is-toggle-contents').removeClass('is-toggle-contents--open');
        } else {
            $(this).addClass('is-toggle-btn--open');
            $(this).next('.is-toggle-contents').addClass('is-toggle-contents--open');
        }

        return false;
    });

});

// アニメーション
document.addEventListener('DOMContentLoaded', () => {
    // ▼切り替えフラグ：true=上から下にスクロール時のみ発火 / false=従来どおり
    const FIRE_ONLY_ON_SCROLL_DOWN = true;

    const targets = Array.from(document.querySelectorAll('.is-animation'));
    if (!targets.length) return;

    const once = new WeakSet(); // 一度発火したら記録
    const thresholdRatio = 0.15; // 要素の15%が見えたら発火（厳密ではないが軽い）

    let ticking = false;
    let lastY = window.scrollY;
    let initialRun = true; // 初回判定フラグ

    const inViewport = (el) => {
        const rect = el.getBoundingClientRect();
        const vw = window.innerWidth || document.documentElement.clientWidth;
        const vh = window.innerHeight || document.documentElement.clientHeight;
        if (rect.width === 0 || rect.height === 0) return false;

        // 可視領域との重なり面積をざっくり計算
        const interLeft = Math.max(0, Math.min(rect.right, vw) - Math.max(rect.left, 0));
        const interTop  = Math.max(0, Math.min(rect.bottom, vh) - Math.max(rect.top, 0));
        const interArea = interLeft * interTop;
        const area = rect.width * rect.height;
        const ratio = area ? (interArea / area) : 0;
        return ratio >= thresholdRatio;
    };

    // 「すでに要素より下までスクロール済み（要素が完全に画面上部の外）」を判定
    const alreadyPassedOnLoad = (el) => {
        const rect = el.getBoundingClientRect();
        return rect.bottom <= 0; // 全体が上側に抜けていれば通過済み
    };

    // 発火条件まとめ
    const shouldFire = (el, isDownScroll, isInitial) => {
        if (!FIRE_ONLY_ON_SCROLL_DOWN) {
            // 従来挙動：方向関係なく viewport 侵入で発火
            return inViewport(el);
        }
        // 上→下のみ：初回は「viewport内 or 既に通過済み」なら発火OK
        if (isInitial) {
            return inViewport(el) || alreadyPassedOnLoad(el);
        }
        // 2回目以降は、下方向スクロール時のみ viewport 侵入で発火
        if (!isDownScroll) return false;
        return inViewport(el);
    };

    const check = (isDownScroll, isInitial) => {
        for (const el of targets) {
            if (once.has(el)) continue;
            if (shouldFire(el, isDownScroll, isInitial)) {
                el.classList.add('is-animation--done');
                once.add(el);
            }
        }
        ticking = false;
        initialRun = false;

        // すべて完了したらリスナー解除
        if (once.size === targets.length) {
            window.removeEventListener('scroll', onScroll, { passive: true });
            window.removeEventListener('resize', onResize);
        }
    };

    const onScroll = () => {
        if (ticking) return;
        ticking = true;
        const currentY = window.scrollY;
        const isDownScroll = currentY >= lastY;
        lastY = currentY;
        requestAnimationFrame(() => check(isDownScroll, false));
    };

    const onResize = () => {
        if (ticking) return;
        ticking = true;
        // リサイズ時は方向条件に縛られず見直し（isDownScroll=true 扱いでOK）
        requestAnimationFrame(() => check(true, false));
    };

    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onResize);

    // 初期チェック：
    // FIRE_ONLY_ON_SCROLL_DOWN=true のときは
    // 「ビューポート内 or 既に通過済み（上側に抜けている）」を発火対象に含める
    // false のときは従来どおりビューポート内のみ
    requestAnimationFrame(() => check(true, true));
});

// トップページ 背景フェードスライド
document.addEventListener('DOMContentLoaded', () => {
    const homeBg = document.querySelector('.is-home-bg');
    if (!homeBg || typeof Splide === 'undefined') return;

    new Splide(homeBg, {
        type: 'fade',
        rewind: true,
        arrows: false,
        pagination: false,
        drag: false,
        autoplay: true,
        interval: 5000,
        speed: 2000,
        pauseOnHover: false,
        pauseOnFocus: false,
        reducedMotion: {
            speed: 2000,
            rewindSpeed: 1000,
            autoplay: true,
        },
    }).mount();
});

// ヘッダー .is-mv を通過したらスクロール済判定を入れる
const header = document.querySelector('.is-header');
const mv = document.querySelector('.is-mv');

function updateHeaderVisibility() {
    if (!header || !mv) return;
    const threshold = mv.offsetTop + mv.offsetHeight;
    if (window.scrollY >= threshold) {
        header.classList.add('is-header--scroll');
    } else {
        header.classList.remove('is-header--scroll');
    }
}

window.addEventListener('load', updateHeaderVisibility);
window.addEventListener('scroll', updateHeaderVisibility, { passive: true });
window.addEventListener('resize', updateHeaderVisibility);

// トップページ ローディングアニメーション
(function () {
    const loadingEl = document.querySelector('[data-home-loading]');
    if (!loadingEl) return;

    const STORAGE_KEY = 'ttopHomeLoadingShown';
    let alreadyShown = false;
    try {
        alreadyShown = sessionStorage.getItem(STORAGE_KEY) === '1';
    } catch (e) {}

    if (alreadyShown) return; // is-home-loading-skip側のCSSで即非表示済み

    document.body.classList.add('is-home-loading-active');

    const MIN_DISPLAY_MS = 300; // 一瞬で読み込んでもチラつかせない最低表示時間
    const WAITING_DELAY_MS = 1500; // これを超えて待たせる場合は待機演出を出す
    let startTime;
    try {
        startTime = performance.now();
    } catch (e) {
        startTime = 0;
    }

    const waitingTimer = setTimeout(function () {
        loadingEl.classList.add('is-waiting');
    }, WAITING_DELAY_MS);

    window.addEventListener('load', function () {
        clearTimeout(waitingTimer);
        const elapsed = (startTime ? performance.now() - startTime : MIN_DISPLAY_MS);
        const remaining = Math.max(MIN_DISPLAY_MS - elapsed, 0);

        setTimeout(function () {
            loadingEl.classList.remove('is-waiting');
            playRevealAnimation();
        }, remaining);
    });

    function playRevealAnimation() {
        const personRight = loadingEl.querySelector('.p-home-loading__person--right');

        // person(左右)と会社名を同時に表示させ、待ち時間を短縮する
        loadingEl.classList.add('is-persons-visible');
        loadingEl.classList.add('is-company-visible');

        const HOLD_MS = 300; // ロゴ表示後、消える前に間をもたせる余韻時間

        const onPersonsDone = function (e) {
            if (e.target !== personRight || e.propertyName !== 'transform') return;
            personRight.removeEventListener('transitionend', onPersonsDone);
            setTimeout(finishLoading, HOLD_MS);
        };
        personRight.addEventListener('transitionend', onPersonsDone);
    }

    function finishLoading() {
        try {
            sessionStorage.setItem(STORAGE_KEY, '1');
        } catch (e) {}
        loadingEl.classList.add('is-hidden');
        document.body.classList.remove('is-home-loading-active');
    }
})();

// .is-business-flow__gallery スクロール位置に応じて画像を切り替え
document.addEventListener('DOMContentLoaded', () => {
    const BREAKPOINT = 1025;

    const flowContainer = document.querySelector('.is-business-flow');
    if (!flowContainer) return;

    const sections = Array.from(flowContainer.querySelectorAll('.is-business-flow__section'));
    const gallery = flowContainer.querySelector('.is-business-flow__gallery');
    if (!sections.length || !gallery) return;

    const galleryItems = Array.from(gallery.querySelectorAll('.is-business-flow__gallery-img'));
    if (galleryItems.length !== sections.length) return;

    let sectionDocTops = [];
    let ticking = false;

    function recalc() {
        if (window.innerWidth < BREAKPOINT) return;
        sectionDocTops = sections.map(section => section.getBoundingClientRect().top + window.scrollY);
    }

    function getActiveIdx(scrollY) {
        let idx = 0;
        const triggerY = scrollY + window.innerHeight / 2;

        for (let i = 1; i < sectionDocTops.length; i++) {
            if (triggerY >= sectionDocTops[i]) idx = i;
        }

        return idx;
    }

    function update() {
        ticking = false;

        if (window.innerWidth < BREAKPOINT) {
            galleryItems.forEach((item, i) => item.classList.toggle('is-active', i === 0));
            return;
        }

        if (!sectionDocTops.length) recalc();

        const activeIdx = getActiveIdx(window.scrollY);
        galleryItems.forEach((item, i) => item.classList.toggle('is-active', i === activeIdx));
    }

    function requestUpdate() {
        if (ticking) return;
        ticking = true;
        window.requestAnimationFrame(update);
    }

    recalc();
    update();

    window.addEventListener('scroll', requestUpdate, { passive: true });
    window.addEventListener('load', () => { recalc(); requestUpdate(); });
    window.addEventListener('resize', () => { recalc(); requestUpdate(); });
});
