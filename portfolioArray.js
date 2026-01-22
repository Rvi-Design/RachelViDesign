// --------------------------Webites--------------------------
const WebsiteArray = [
    {
        projectName: 'Wild Rose Foundry - E-commerce',
        mainImage: 'Assets/websites/WildRoseFoundry/wrf.Large.png',
        mainAlt: 'A stylized rose made up of wood, stone, and metal. Wild rose symbol for Alberta, Canada.',
        blurb: 'This site was created as a final project in one of my SAIT courses. The directive was to create an e-commerce website fron the ground up. <br><br> The site uses a database for recording products and vendors, storing user order data, and flagging items as `featured` or `default`.<br> <br> The time system `Temporal` was used in building the JS christmas countdown, but is currently only supported through Mozilla Firefox and not Google Chrome.',
        SiteLink: 'https://dev.interactivedesign.ca/~rpayette/cprg310/final/',
        sitePicA: 'Assets/websites/WildRoseFoundry/pottery.jpg',
        altA: 'a close-up photo of pottery',
        sitePicB: 'Assets/websites/WildRoseFoundry/RoseIco-Dark.png',
        altB: 'a simple black rose icon',
        sitePicC:'Assets/websites/WildRoseFoundry/RoseIco-Gold.png',
        altC: 'a simple gold rose icon',
        sitePicD:'Assets/websites/WildRoseFoundry/RoseIco-Med.png',
        altD: 'a simple copper rose icon',
        sitePicE:'Assets/websites/WildRoseFoundry/WRF.jpg',
        altE:'logo for Wild Rose Foundry. A stylized rose made out of wood, stone, and metal.'
    },

    {
        projectName: 'Th3 Rice Lab - Nail Technician Site',
        mainImage: 'Assets/websites/Th3RiceLab/Logo-V2.png',
        mainAlt: 'A stylized Erlenmeyer flask with rainbow iridescent fluid and bubbles inside.',
        blurb: 'This site was made for a local Calgarian nail technician. It has a full back-end and admin dashboard. The client needed a site to accompany her growth as a business and assist in filtering and scheduling clients and potential clients.',
        SiteLink: 'https://th3ricelab.ca/',
        sitePicA: 'Assets/websites/Th3RiceLab/TRL-more.jpg',
        altA: 'A screen-shot of `Th3 Rice Lab` nail technician website, showing the main home page.',
        sitePicB: 'Assets/websites/Th3RiceLab/TRL.jpg',
        altB: 'A scren-shot of `Th3 Rice Lab` home page, showing several features available on the website.',
        sitePicC:'Assets/websites/Th3RiceLab/v.3.png',
        altC: 'An earlier version of `Th3 Rice Lab` logo with a more realistic/less stylized look.',
        sitePicD:'Assets/websites/Th3RiceLab/Logo-V2.png',
        altD: 'The logo for `Th3 Rice Lab`, an upright Erlenmeyer flask with rainbow liquid and bubbles inside.',
        sitePicE:'Assets/websites/Th3RiceLab/S-S-chart.png',
        altE:'A size and shape reference chart, in purple and black hues, made for `Th3 Rice Lab` website.'
    }
]
// --------------------------Logos--------------------------
const LogoArray = [
    {
        projectName: 'DreamTeam',
        mainImage: 'Assets/Logos/dreamteam/Logo.png',
        mainAlt: 'A stylized "D" in an orange-to-pink-to-purple gradient, with a star cut-out in the middle of the "D".',
        blurb: 'This logo was created for a team project while at SAIT. Dreamteam created a commercial, podcast episode, and several other creative works. The process of design for this logo  ',
        logoA: '',
        altA: '',
        logoB: '',
        altB: '',
        logoC: '',
        altC: '',
        assetPic: '',
        assetAlt: ''

    },

    {
        projectName: 'SweetPeach',
        mainImage: '',
        mainAlt: '',
        blurb: '',
        logoA: '',
        altA: '',
        logoB: '',
        altB: '',
        logoC: '',
        altC: '',
        assetPic: '',
        assetAlt: ''

    },

     {
        projectName: 'Th3 Rice Lab',
        mainImage: '',
        mainAlt: '',
        blurb: '',
        logoA: '',
        altA: '',
        logoB: '',
        altB: '',
        logoC: '',
        altC: '',
        assetPic: '',
        assetAlt: ''

    },

    {
        projectName: 'Jewels by Jules',
        mainImage: '',
        mainAlt: '',
        blurb: '',
        logoA: '',
        altA: '',
        logoB: '',
        altB: '',
        logoC: '',
        altC: '',
        assetPic: '',
        assetAlt: ''

    },

    {
        projectName: 'Out Of Abyss',
        mainImage: '',
        mainAlt: '',
        blurb: '',
        logoA: '',
        altA: '',
        logoB: '',
        altB: '',
        logoC: '',
        altC: '',
        assetPic: '',
        assetAlt: ''

    },
    {
        projectName: 'Rachel Vi design',
        mainImage: '',
        mainAlt: '',
        blurb: '',
        logoA: '',
        altA: '',
        logoB: '',
        altB: '',
        logoC: '',
        altC: '',
        assetPic: '',
        assetAlt: ''

    }
]
// --------------------------Artwork--------------------------
const ArtworkArray = [
    {
        projectName: '',
        mainImage: '',
        mainAlt: '',
        blurb: '',
        mediums: '',
        picA: '',
        altA: '',
        picB: '',
        altB: ''
    },
]

// learning along with Dan in Thursday class
let num1 = 6;
let num2 = 1;
let total = num1 + num2;
console.log(total);


function calculateTicketPrice () {
    let qty = document.querySelector("#quantity").value;
        qty = Number(qty); //form inputs are always strings, so we need to convert it to a number in order to calculate it. 
    console.log("Quantity:" +qty);

    // what ticket option was selected
    let ticketType = document.querySelector("#ticket").value;
    console.log(ticketType);
}

 document.querySelector("#quantity").addEventListener("change", calculateTicketPrice);
 document.querySelector("#ticket").addEventListener("change", calculateTicketPrice);