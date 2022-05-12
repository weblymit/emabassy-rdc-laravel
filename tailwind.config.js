module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],
    theme: {
        extend: {
            container: {
                center: true,
                padding: {
                    sm: "2rem",
                    lg: "4rem",
                },
            },
            borderRadius: {
                xl: "30px",
                xxl: "50px",
            },
            borderRadius: {
                xl: "30px",
                xxl: "50px",
            },
            spacing: {
                30: "30px",
                // '40': '40px',
                50: "50px",
                60: "60px",
                70: "70px",
                80: "80px",
                90: "90px",
                100: "100px",
                110: "110px",
                120: "120px",
                130: "130px",
            },
            width: {
                100: "28rem",
                110: "32rem",
                120: "36rem",
                130: "40rem",
            },
        },
    },
    plugins: [require("tw-elements/dist/plugin")],
};
