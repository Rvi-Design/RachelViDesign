// ============================================================
//  CASE STUDY DATA
//  To add a new case study: copy one object and fill it in.
//  `folder` matches the subfolder name under Assets/projects/.
//  The card accent is always Assets/projects/<folder>/thumb.svg.
//  Omit `challenge` / `steps` / `images` for a "coming soon" card.
// ============================================================

const CaseStudyArray = [
    {
        id:       'card-fp',
        nameId:   'FriendoPretendo',
        name:     'Friendo-Pretendo',
        folder:   'friend',
        accentBg: '#FBEAF0',
        tagline:  'Brand identity for a social-skills AI chatbot',
        tags: [
            { label: 'Branding', style: 'tag-pink' },
            { label: 'Mascot',   style: 'tag-blue' }
        ],
        challenge: `How can we make people feel comfortable opening up? Friendo-Pretendo is an AI chatbot helping users practice social skills in a safe, judgment-free environment — targeted at young men who experienced isolation during the pandemic, but welcoming to anyone.`,
        steps: [
            {
                label: 'Exploration & concept development',
                desc:  'Explored character silhouettes, personalities, and anime influence levels. Designing an androgynous character was the core challenge — carefully balancing features to feel welcoming without leaning masculine or feminine.'
            },
            {
                label: 'Concept selection — Ari',
                desc:  'Ari emerged as the clear choice: softer, more expressive, and more playful than the alternatives. Black-and-white hair removed colour-coded gender signals while preserving a whimsical quality.'
            },
            {
                label: 'Visual language',
                desc:  'Pastel blue as primary (calming), warm yellow for energy, pink accents to offset blue\'s masculine associations. Cherry Bomb One selected for its rounded, bubble-like forms — also a practical Google Font choice for the dev team.'
            },
            {
                label: 'Refinement & logo development',
                desc:  'Simplified aggressively — the head tilt, mouth shape, and hair tufts carry more recognition than detail. Added thick outlines inspired by sticker books and rubber-hose animation. Heart-shaped eye highlights reinforce empathy without gendered cues like lashes.'
            },
            {
                label: 'Brand system',
                desc:  'Full colour, simplified, and monochrome logo variants. Scalability tested at icon sizes throughout — a design that works on a monitor must also read as a mobile app icon.'
            }
        ],
    },

    {
        id:       'card-mt',
        nameId:   'MyTrainer',
        name:     'My TrAIner',
        folder:   'trainer',
        accentBg: '#E1F5EE',
        tagline:  'Fitness coaching brand — coming soon',
        tags: [
            { label: 'Branding', style: 'tag-teal' }
        ],
        challenge: `How can I communicate both fitness and nutrition in a single, recognizable mark without sacrificing simplicity?`,
        steps: [
            {
                label: 'Exploration & concept development',
                desc: 'My TrAIner is an AI-powered fitness platform that combines workout planning, nutrition tracking, and scheduling into a single application. Rather than requiring users to manage multiple health and fitness apps, the platform uses AI to generate personalized fitness plans, dietary recommendations, and routines within one ecosystem. My role was to develop a logo and visual identity that communicated the platform`s broader approach to health and wellness. The client already had an established colour palette and dark-mode interface direction, so my focus was on creating a recognizable brand mark that reflected both fitness and nutrition without appearing to be exclusively one or the other.The primary challenge was finding a visual connection between exercise and nutrition. Many fitness brands rely heavily on dumbbells, barbells, or athletic imagery, while nutrition-focused brands often lean into fruits, vegetables, or organic motifs. Because My TrAIner encompasses both disciplines, I wanted to create a logo that represented the complete experience rather than only one aspect of the platform.'
            },

            {
                label: 'Concept selection',
                desc: 'The final direction combined the silhouette of an orange with the recognizable shape of a kettlebell. While dumbbells were considered during exploration, their proportions became difficult to read at smaller scales and introduced unnecessary complexity. The kettlebell offered a simpler, more iconic silhouette that remained recognizable even when significantly reduced. The orange naturally formed the body of the kettlebell, while the handle evolved into a stylized leaf. This solution allowed both nutrition and fitness concepts to coexist within a single shape without requiring additional visual elements. The result was a logo that immediately communicated the platform`s dual focus while remaining clean, modern, and memorable.'
            },

            {
                label: 'Visual language',
                desc: 'The client had already established a bold colour palette built around a dark-mode experience, featuring vibrant oranges, reds, greens, blues, and lime accents. Rather than reducing the identity to only two or three colours, I wanted the logo to better reflect the energy of the platform as a whole. Subtle gradients allowed me to incorporate a broader portion of the brand palette while maintaining a clean and contemporary appearance. The resulting colour treatment feels energetic and modern while reinforcing the idea that My TrAIner provides a complete wellness solution rather than focusing on a single aspect of fitness. For typography, I selected Rubik One. The typeface offers the bold presence necessary for strong scalability while avoiding the overly aggressive or stereotypical styling commonly found within the fitness industry. Its rounded geometry complements the logo mark and helps the brand feel approachable without sacrificing energy or confidence.'
            },

            {
                label: 'Refinement & logo development',
                desc: 'Once the core concept was established, refinement focused on removing anything that was not essential to recognition. The challenge was balancing two visual ideas within a single icon while preserving clarity. Every adjustment to the kettlebell shape affected the readability of the orange, and every change to the leaf impacted the fitness symbolism. I iterated on the proportions and silhouette repeatedly, simplifying forms until the logo remained recognizable at mobile-app scale while still communicating both concepts. This process reinforced a design principle I rely on frequently: the strongest logos communicate more by showing less. The final silhouette uses only a handful of simple shapes, allowing it to scale effectively across digital applications without losing its identity.'
            },
            {
                label: 'Brand system',
                desc: 'The final stage focused on shape refinement, colour balance, and scalability.  Subtle adjustments to the curves, gradients, and proportions helped unify the logo into a single cohesive mark rather than two separate visual ideas. I also tested the logo at a variety of sizes to ensure it remained recognizable in app icons, website navigation, social media assets, and promotional materials.  The completed identity successfully captures the platform`s core value proposition: fitness and nutrition working together within a single experience. By reducing those ideas into one simple, memorable symbol, the final design remains versatile, scalable, and immediately recognizable across all intended applications. The final My TrAIner identity combines nutrition and fitness into a single, modern visual system. Through simplified forms, bold typography, and strategic use of colour, the brand communicates energy, wellness, and accessibility while standing apart from more traditional fitness applications.'
            }            
        ],
    },

    {
        id:       'card-tf',
        nameId:   'TuningFork',
        name:     'Tuning Fork',
        folder:   'tuning',
        accentBg: '#E6F1FB',
        tagline:  'Brand identity — coming soon',
        tags: [
            { label: 'Identity', style: 'tag-blue' }
        ]
    },

    {
        id:       'card-qf',
        nameId:   'QuestForge',
        name:     'QuestForge',
        folder:   'quest',
        accentBg: '#F3EDFB',
        tagline:  'D&D app brand identity & logo — coming soon',
        tags: [
            { label: 'Branding', style: 'tag-blue' },
            { label: 'Identity', style: 'tag-teal' }
        ]
    },

    {
        id:       'card-hv',
        nameId:   'Hivemind',
        name:     'Hivemind',
        folder:   'hive',
        accentBg: '#FEF3C7',
        tagline:  'Brand identity — coming soon',
        tags: [
            { label: 'Branding', style: 'tag-pink' }
        ]
    }
];


// ============================================================
//  RENDER FUNCTIONS — no edits past here
// ============================================================

// Steps 1–5 map to these filenames in every project folder.
const STEP_IMAGES = ['sketch', 'selected', 'palette', 'refine', 'finalTouch'];

function buildSteps(steps, folder) {
    if (!steps || steps.length === 0) return '';
    const rows = steps.map((s, i) => {
        const imgName = STEP_IMAGES[i];
        const imgHTML = (folder && imgName)
            ? `<div class="step-img">
                   <img src="Assets/projects/${folder}/${imgName}.png"
                        alt="${s.label}"
                        loading="lazy">
               </div>`
            : '';
        return `
            <div class="step">
                <div class="step-num">${i + 1}</div>
                <div>
                    <div class="step-label">${s.label}</div>
                    <div class="step-desc">${s.desc}</div>
                </div>
            </div>
            ${imgHTML}`;
    }).join('');
    return `<div class="process-steps"><p class="section-title">Process</p>${rows}</div>`;
}

function buildFinalImages(folder) {
    if (!folder) return '';
    return `
        <div class="two-col" style="margin-top:1.5rem;">
            <div><img src="Assets/projects/${folder}/final.png"   alt="Final logo"        loading="lazy" style="width:100%; border-radius:8px;"></div>
            <div><img src="Assets/projects/${folder}/squares.png" alt="Brand system grid" loading="lazy" style="width:100%; border-radius:8px;"></div>
        </div>`;
}

function buildCaseStudyCard(project) {
    const tagsHTML = project.tags
        .map(t => `<span class="tag ${t.style}">${t.label}</span>`)
        .join('');

    const thumbSrc = `Assets/projects/${project.folder}/thumb.svg`;

    const bodyContent = project.challenge
        ? `<div class="project-content">
               <div class="content-overview">
                   <span class="challenge-pill">
                       <i class="ti ti-bulb" aria-hidden="true" style="font-size:13px;"></i>
                       Design challenge
                   </span>
                   <p class="body-text">${project.challenge}</p>
               </div>
               ${buildSteps(project.steps, project.folder)}
               ${buildFinalImages(project.folder)}
           </div>`
        : `<div class="coming-soon">
               <i class="ti ti-clock" aria-hidden="true"></i>
               <span>Case study in progress</span>
           </div>`;

    return `
        <div class="project-card" id="${project.id}">
            <button class="project-trigger" onclick="toggle('${project.id}')" aria-expanded="false">
                <div class="project-accent" style="background:${project.accentBg};">
                    <img src="${thumbSrc}" width="32" height="32" alt="" loading="lazy">
                </div>
                <div class="project-meta">
                    <div class="project-name" id="${project.nameId}">${project.name}</div>
                    <div class="project-tagline">${project.tagline}</div>
                </div>
                <div class="project-tags">${tagsHTML}</div>
                <i class="ti ti-chevron-down chevron" aria-hidden="true"></i>
            </button>
            <div class="project-body">
                <div class="project-body-inner">
                    <div class="project-divider"></div>
                    ${bodyContent}
                </div>
            </div>
        </div>`;
}

function toggle(id) {
    const card   = document.getElementById(id);
    const isOpen = card.classList.contains('open');
    card.classList.toggle('open', !isOpen);
    card.querySelector('.project-trigger').setAttribute('aria-expanded', String(!isOpen));
}

document.addEventListener('DOMContentLoaded', function () {
    const container = document.getElementById('caseStudiesContainer');
    if (!container) return;
    CaseStudyArray.forEach(project => {
        container.innerHTML += buildCaseStudyCard(project);
    });
});
