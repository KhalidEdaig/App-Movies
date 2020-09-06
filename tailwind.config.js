module.exports = {
    theme: {
        boxShadow: {
            md:
                "0 4px 6px -1px rgba(236, 240, 241,0.8), 0 2px 4px -1px rgba(0, 0, 0, .04)"
        },
        extend: {
            width: {
                "96": "26rem"
            }
        }
    },
    variants: {
        borderWidth: ["responsive", "hover", "focus"],
        width: ["responsive", "hover", "focus"],
        transitionDuration: ["responsive", "hover", "focus"],
        zIndex: ["responsive", "hover", "focus"]
    },
    plugins: [require("tailwindcss-plugins/pagination")]
};
