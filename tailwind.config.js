const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');
module.exports = {
    purge: [
        './resources/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
          './resources/views/**/*.blade.php',
        ],
    darkMode: 'class',
    theme: {
          extend: {
              fontFamily: {
                  sans: ['Inter var', ...defaultTheme.fontFamily.sans],
                },
                colors:{
                  mjtheme: {
                    light:'var(--mjlight)',
                    dark:'var(--mjdark)',
                    theme:'var(--indigo)',
                  },
                  darker: 'var(--darker)',
                  dark: {
                    bg:'var(--bgdark)',
                    fg:'var(--fgdark)',
                    fg2:'var(--fg2dark)',
                    theme:'var(--themedark)',
                    primary:'#ffffff',
                    secondary:'#c2c2c2'
                  },
                  light: {
                    bg:'var(--bglight)',
                    fg:'var(--fglight)',
                    fg2:'var(--fg2light)',
                    theme:'var(--themelight)',
                    primary:'#27242c',
                    secondary:'#878787'
                  }
                }
              },
            },

      variants: {
              extend: {
                borderRadius: ['hover','focus'],
                opacity: ['disabled'],
                display: ['hover', 'focus'],
                ringWidth: ['hover', 'active'],
                translate: ['active', 'hover'],
              },
            },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],

};
