-- Exported from QuickDBD: https://www.quickdatabasediagrams.com/
-- NOTE! If you have used non-SQL datatypes in your design, you will have to change these here.


CREATE TABLE `project` (
    `ID` SMALLINT  NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(50)  NOT NULL ,
    `category` VARCHAR(20)  NOT NULL ,
    `blurb` MEDIUMTEXT  NOT NULL ,
    `link` VARCHAR(35)  NOT NULL ,
    `medium` VARCHAR(50)  NOT NULL ,
    `imgMain` VARCHAR(20)  NOT NULL ,
    `altMain` VARCHAR(255)  NOT NULL ,
    `imgTopright` VARCHAR(20)  NOT NULL ,
    `altTopright` VARCHAR(255)  NOT NULL ,
    `imgLeftbox` VARCHAR(20)  NOT NULL ,
    `altLeftbox` VARCHAR(255)  NOT NULL ,
    `imgRightbox` VARCHAR(20)  NOT NULL ,
    `altRightbox` VARCHAR(255)  NOT NULL ,
    `imgLongbox` VARCHAR(20)  NOT NULL ,
    `altLongbox` VARCHAR(255)  NOT NULL ,
    `imgBigbox` VARCHAR(20)  NOT NULL ,
    `altBigbox` VARCHAR(255)  NOT NULL ,
    PRIMARY KEY (
        `ID`
    )
);


-- contact me form table

CREATE TABLE `contacts` (
    `ID` SMALLINT  NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(80) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `reason` MEDIUMTEXT NOT NULL,
    `esd` VARCHAR(40) NULL,
    PRIMARY KEY (
    `ID`
)

);

-- commission table

CREATE TABLE `commissions` (
    `ID` SMALLINT  NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(80) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `reason` MEDIUMTEXT NOT NULL,
    `esb` VARCHAR(40)  NULL,
    `img` VARCHAR(60) NULL,
    PRIMARY KEY (
    `ID`
)

);



-- Categories:
-- Website, Artwork, Logo

INSERT INTO `project`(`ID`,`name`,`h2`,`category`,`blurb`) VALUES

(1,'Wild Rose Foundry','E-Commerce Website — SAIT Final Project','Website','As my final project at SAIT, I designed and built a fully functional e-commerce website from the ground up. The process began with planning and database design, including creating an ERD and later revising it to reflect new requirements, intentionally mirroring the realities of client feedback and scope changes.

On the technical side, I batch-processed over 160 product images into optimized thumbnails and item photos, built dynamic product listings using PHP and database queries, and styled the site into a cohesive, polished experience with HTML and CSS. JavaScript brought the interface to life through interactive product carousels and a festive seasonal touch: a live Christmas countdown.

This project took approximately 80 hours to complete as a solo build and became a major learning milestone for me. Beyond the technical skills, it helped me better understand my own coding habits, identify areas for growth, and solidify best practices that now inform how I approach larger, more complex projects.'),

(2,'Th3 Rice Lab','Th3 Rice Lab — Client Website','Website','Over the summer, I collaborated with a computer science peer to design and build a custom website for <span>Th3 Rice Lab </span>, a new nail technician business. I took on the role of front-end designer, working closely with the client to translate their vision into a clean, functional interface while ensuring the front end communicated seamlessly with the back end and database.

The site was built using a MERN stack, with TypeScript, JavaScript, HTML, and CSS through React and Tailwind. Beyond development, I also created a range of custom visual assets for the project, including an area-of-operation map, nail size and shape charts, and multiple logo iterations to support the brand’s identity.

The project took approximately 60 hours to complete and resulted in a fully functional platform featuring an admin dashboard, booking and payment systems, calendar integration, and tools to log and monitor revenue and expenses. This project gave me hands-on experience balancing technical constraints, client needs, and design clarity in a production-ready environment.'),

(3,'Sweet Peach','SweetPeach — Logo & Brand Identity','Logo','<span>SweetPeach</span> is a concept skincare brand I developed as a branding and identity exploration. The goal was to create a logo system and brand guidelines that felt down-to-earth, modern, and approachable, while still appealing to a young, feminine target audience.

The visual identity centers around a minimal, post-modern peach mark—built from soft geometric shapes and a tapered, expressive stroke—to suggest both the product inspiration and the brand’s playful tone. A warm, muted color palette reinforces a sense of softness and care, helping the brand feel inviting without becoming overly delicate.

To support the logo, I designed a custom display typeface inspired by rounded citrus forms and fuzzy, organic textures, blending the friendliness of fonts like Tangelo with a more refined, contemporary edge. Together, the logo and typography strike a balance between playful and polished, giving SweetPeach a cohesive, flexible foundation for future packaging and marketing.'),

(4,'Jewels by Jules','Jewels by Jules — Logo Design','Logo','Jewels by Jules is a logo design project created for a local Calgary-based aesthetician. Jules wanted a brand mark that felt feminine, delicate, and unmistakably personal, something that looked and felt like her.

We worked through three iterative design sessions to refine the concept, followed by multiple colour and texture explorations to dial in the final look. The chosen direction became a soft, sun-kissed illustration of Jules herself, featuring flowing, wavy hair with a ribbon weaving in and out—symbolizing care, movement, and connection.

The final mark includes natural, organically shaped gemstones floating between her hands, reinforcing the brand’s focus on beauty, intention, and thoughtful self-care. This project was a collaborative, detail-oriented process that balanced personal storytelling with a flexible, recognizable identity suited for both digital and print use.'),

(5,'DreamTeam','DreamTeam — Brand Identity & Guidelines','Logo','DreamTeam is a collaborative brand identity created for one of my project groups at SAIT. As our team worked together across multiple classes and semester-long projects, we needed a cohesive visual identity that could adapt to a wide range of deliverables.

The name naturally evolved from our group nickname, “The Dream Team,” and became the foundation for a playful yet purposeful brand.

To support the identity, I developed a full set of brand assets including a wordmark, logo variations, icon sets, and themed taglines. This system allowed the brand to remain consistent and recognizable while still feeling flexible enough to grow alongside our work throughout the semester.'),

(6,'Out of Abyss','Out of Abyss — Band Logo Design','Logo','Out of Abyss is a logo set created for a progressive jazz-metal band undergoing a visual rebrand and musical evolution (previously performing under the name Out of the Band). The goal was to shift toward a more metal-centric identity while avoiding imagery that felt overly aggressive or off-putting.

The final concept is built around a predator–prey aesthetic, blending the forms of a wolf and a rabbit into a single, stylized mark inspired by illustrative, mythic design styles similar to <a href="https://www.faunwood.com/">Faunwood</a>. This duality reflects both the intensity and nuance of the band’s sound, balancing heaviness with restraint and musical complexity.

The system includes a primary and secondary logo designed to function as a paired set: one for the band’s core identity, and one to accompany new music releases and EP artwork. Both marks were developed with scalability in mind, allowing them to translate cleanly across digital platforms, album art, and physical merchandise.'),

(7,'Rachel Vi Design','Rachel Vi Design — Personal Logo','Logo','Rachel Vi Design is my personal professional mark, created to represent both my design approach and my identity as a creative. From the outset, I wanted a logo that felt recognizable, feminine, and sleek, something expressive without being rigid, and versatile enough to live across every platform I use professionally.

Designed as a simple but flexible system, the logo translates easily across business cards, resumes, portfolio and personal websites, social media profiles, and other professional touchpoints with minimal alteration. It’s a mark I genuinely enjoy using, one that feels both personal and enduring, and that grows comfortably alongside my work.'),

(8,'Autumn','Autumn — Digital Illustration','Artwork','Autumn was created as a way to bridge the gap between my background in traditional art and my transition into digital illustration. The piece began with an old, unfinished sketch; one I had always intended to complete but never quite returned to, making it a natural and grounding starting point for exploring a new medium.

Using the original sketch as a foundation, I approached the piece as a learning exercise in digital painting, allowing the process to evolve organically. The illustration went through several iterations as I experimented with palette choices, lighting, and shading techniques, gradually refining the mood and visual balance.

While Autumn took time to complete, it became a meaningful milestone in my artistic growth. By the end of the piece, I had gained a much deeper understanding of digital workflows, layering, and color control—lessons that continue to influence how I approach my digital work today.'),

(9,'A Spirit Arrives','A Spirit Arrives — Commissioned Illustration','Artwork','<span>A Spirit Arrives</span> is a commissioned illustration created to celebrate the birth of a child. The parents requested a horse rendered in non-gendered colours, as the piece was intended for a nursery before they knew whether they were expecting a boy or a girl.

The artwork was inspired by a photograph of one of the family’s horses, which I used as a reference to design a technicolour, neo-traditional interpretation. My focus was on capturing the animal’s wild energy and spirit, while maintaining a softness and warmth suited to a space meant for rest and new beginnings.

This piece was a thoughtful balance between expressive colour, emotional symbolism, and personal meaning, created to grow with the child and remain resonant well beyond the nursery years.'),

(10,'Joyride','Joyride — Digital Illustration','Artwork','Joyride is part of my ongoing “devil-girl” series; an exploratory exercise where I challenged myself to design multiple horned, demonic-inspired characters while experimenting with varied styles, anatomy, and visual language.

This piece leans fully into bold colour, exaggerated expression, and unconventional anatomy. The horn structure, palette choices, and facial features were all designed to push contrast and personality, resulting in a vibrant, slightly chaotic composition that captures a sense of manic, high-energy movement.

Like several of my digital works, Joyride began as a loose sketch before transitioning into a fully rendered digital illustration. Above all, this piece was about creative freedom; allowing play, experimentation, and instinct to guide the process. Sometimes the most valuable work comes from simply letting yourself have fun.'),

(11,'Works in Progress','Miscellaneous Pieces — Works in Progress','Artwork','A small selection of sketches, works-in-progress, and pieces that don’t belong to a specific series or theme. This section highlights other styles and ideas I’ve been exploring recently, offering a glimpse into my ongoing experimentation and creative curiosity.'),

(12,'Stargazers','Stargazers — Acrylic on Wood','Artwork','Stargazers is a gift created for a family member, exploring texture, color, and form through acrylic on wood. The piece uses chunky, square brushstrokes to construct eyes and stars, while pallet-knife techniques add ridges and arcs, giving the work a tactile, layered feel.

The eye colours are a personal nod, reflecting those of the family member and her husband, adding an intimate, meaningful touch. Working with square strokes to create rounded shapes presented a unique technical challenge, and one I found both fun and rewarding. The result is a vibrant, textured piece that combines experimentation with personal storytelling.');
