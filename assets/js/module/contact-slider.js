export function initContactSlider() {
  
  // footer contactセクション スライダー設定

  const targets = [".js-contact-slider-first", ".js-contact-slider-second"];

  targets.forEach((target, index) => {
    const options = {
      type: "loop",
      direction: "ttb",
      clones: 4, // 【推奨】縦ループの隙間・ガタつき防止
      autoHeight: true,
      arrows: false, // 矢印非表示
      pagination: false, // ページネーション非表示
      height: "540rem",
      gap: "15rem",

      autoScroll: {
        speed: index === 1 ? 0.5 : -0.5, // 左右で方向を反対にする
        pauseOnHover: false, // ホバー時にスライダーを止めない
      },

      breakpoints: {
        900: {
          direction: "ltr", // 横向き（Left to Right）に変更
          height: "auto", // 縦向き用の高さをリセット
          autoHeight: false, // 横向きなのでfalseにする
          fixedWidth: "150rem",
          gap: "8rem",

          autoScroll: {
            speed: index === 1 ? 0.3 : -0.3, // 左右で方向を反対にする
          },
        },
      },
    };

    const mySplide = new Splide(target, options);

    mySplide.mount(window.splide.Extensions);
  });
}
