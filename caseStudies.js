// ============================================================
//  CASE STUDY DATA
//  To add a new case study: copy one object and fill it in.
//  Only `id`, `nameId`, `name`, `tagline`, `accent`, and `tags`
//  are required. Omit `challenge` / `steps` / `images` for a
//  "coming soon" card.
// ============================================================

const CaseStudyArray = [
    {
        id:      'card-fp',
        nameId:  'FriendoPretendo',
        name:    'Friendo-Pretendo',
        tagline: 'Brand identity for a social-skills AI chatbot',
        accent:  { bg: '#FBEAF0', icon: 'ti ti-heart', color: '#D4537E' },
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
        images: [
            { placeholder: 'Concept sketches', icon: 'ti ti-photo'   },
            { placeholder: 'Colour palette',   icon: 'ti ti-palette' }
            // When you have real images, replace the line above with:
            // { src: 'Assets/FriendoPretendo/palette.jpg', alt: 'Colour palette' }
        ]
    },

    {
        id:      'card-mt',
        nameId:  'MyTrainer',
        name:    'My TrAIner',
        tagline: 'Fitness coaching brand — coming soon',
        accent:  { bg: '#E1F5EE', icon: 'ti ti-barbell', color: '#1D9E75' },
        tags: [
            { label: 'Branding', style: 'tag-teal' }
        ]
    },

    {
        id:      'card-tf',
        nameId:  'TuningFork',
        name:    'Tuning Fork',
        tagline: 'Brand identity — coming soon',
        accent:  { bg: '#E6F1FB', icon: 'ti ti-music', color: '#378ADD' },
        tags: [
            { label: 'Identity', style: 'tag-blue' }
        ]
    }
];


// ============================================================
//  RENDER FUNCTIONS
//  You shouldn't need to touch anything below this line.
// ============================================================

function buildSteps(steps) {
    if (!steps || steps.length === 0) return '';
    const rows = steps.map((s, i) => `
        <div class="step">
            <div class="step-num">${i + 1}</div>
            <div>
                <div class="step-label">${s.label}</div>
                <div class="step-desc">${s.desc}</div>
            </div>
        </div>`
    ).join('');
    return `<div class="process-steps"><p class="section-title">Process</p>${rows}</div>`;
}

function buildImages(images) {
    if (!images || images.length === 0) return '';
    const cols = images.map(img => {
        const inner = img.src
            ? `<img src="${img.src}" alt="${img.alt ?? ''}" loading="lazy" style="width:100%; border-radius:8px;">`
            : `<div class="image-placeholder">
                   <i class="${img.icon}" aria-hidden="true"></i>
                   <span>${img.placeholder}</span>
               </div>`;
        return `<div>${inner}</div>`;
    }).join('');
    return `<div class="two-col" style="margin-top:1.5rem;">${cols}</div>`;
}

function buildCaseStudyCard(project) {
    const tagsHTML = project.tags
        .map(t => `<span class="tag ${t.style}">${t.label}</span>`)
        .join('');

    const bodyContent = project.challenge
        ? `<div class="project-content">
               <div class="content-overview">
                   <span class="challenge-pill">
                       <i class="ti ti-bulb" aria-hidden="true" style="font-size:13px;"></i>
                       Design challenge
                   </span>
                   <p class="body-text">${project.challenge}</p>
               </div>
               ${buildSteps(project.steps)}
               ${buildImages(project.images)}
           </div>`
        : `<div class="coming-soon">
               <i class="ti ti-clock" aria-hidden="true"></i>
               <span>Case study in progress</span>
           </div>`;

    return `
        <div class="project-card" id="${project.id}">
            <button class="project-trigger" onclick="toggle('${project.id}')" aria-expanded="false">
                <div class="project-accent" style="background:${project.accent.bg};">
                    <i class="${project.accent.icon}" style="color:${project.accent.color};" aria-hidden="true"></i>
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
