<a name="readme-top">

<br/>

<br />
<div align="center">
  <a href="https://github.com/carlmarinyo/">
  <!-- TODO: If you want to add logo or banner you can add it here -->
  </a>
<!-- TODO: Change Title to the name of the title of your Project -->
  <h3 align="center">Car Gallery</h3>
</div>
<!-- TODO: Make a short description -->
<div align="center">
A gallery of car brands with description
</div>

<br />

<!-- TODO: Change the zyx-0314 into your github username  -->
<!-- TODO: Change the WD-Template-Project into the same name of your folder -->

![](https://visit-counter.vercel.app/counter.png?page=carlmarinyo/AD-Task-2)

[![wakatime](https://wakatime.com/badge/user/018dd99a-4985-4f98-8216-6ca6fe2ce0f8/project/63501637-9a31-42f0-960d-4d0ab47977f8.svg)](https://wakatime.com/badge/user/018dd99a-4985-4f98-8216-6ca6fe2ce0f8/project/63501637-9a31-42f0-960d-4d0ab47977f8)

---

<br />
<br />

<!-- TODO: If you want to add more layers for your readme -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#overview">Overview</a>
      <ol>
        <li>
          <a href="#key-components">Key Components</a>
        </li>
        <li>
          <a href="#technology">Technology</a>
        </li>
      </ol>
    </li>
    <li>
      <a href="#rule,-practices-and-principles">Rules, Practices and Principles</a>
    </li>
    <li>
      <a href="#resources">Resources</a>
    </li>
  </ol>
</details>

---

## Overview

<!-- TODO: To be changed -->
<!-- The following are just sample -->

Description of the project in details.

### Key Components

<!-- TODO: List of Key Components -->
<!-- The following are just sample -->

- Data Handling
- Component Based Architechture
- Dynamic Content Reading

### Technology

<!-- TODO: List of Technology Used -->
#### Language
![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

## Rules, Practices and Principles

<!-- Do not Change this -->

1. Always use `AD-` in the front of the Title of the Project for the Subject followed by your custom naming.
2. Do not rename `.php` files if they are pages; always use `index.php` as the filename.
3. Add `.component` to the `.php` files if they are components code; example: `footer.component.php`.
4. Add `.util` to the `.php` files if they are utility codes; example: `account.util.php`.
5. Place Files in their respective folders.
6. Different file naming Cases
   | Naming Case | Type of code         | Example                           |
   | ----------- | -------------------- | --------------------------------- |
   | Pascal      | Utility              | Accoun.util.php                   |
   | Camel       | Components and Pages | index.php or footer.component.php |
8. Renaming of Pages folder names are a must, and relates to what it is doing or data it holding.
9. Use proper label in your github commits: `feat`, `fix`, `refactor` and `docs`
10. File Structure to follow below.

```
AD-Task-2
└─ assets
|   └─ css
|   |   └─ styles.css
|   └─ img
|   |   └─ gt3r.jpg
└─ components
|   └─ cards
       |- gallery-card.component.php
|   └─ templates
|      └─ foot.component.php
|      └─ head.component.php
|      └─ nav.component.php
└─ handlers
|   └─ carData.handler
└─ pages
|  └─ gallery
|     └─ assets
|     |  └─ css
|     |  |  └─ gallery.css
|     |  └─ img
|     |  |  └─ bmw.png
|     |  |  └─ ford.jpg
|     |  |  └─ honda.png
|     |  |  └─ toyota.png
|     └─ index.php
└─ utils
|   └─ htmlEscape.utils.php
|   └─ joinWithComma.utils.utils.php
└─ vendor
└─ .gitignore
└─ bootstrap.php
└─ composer.json
└─ composer.lock
└─ index.php
└─ readme.md
└─ router.php
```
> The following should be renamed: name.css, name.js, name.jpeg/.jpg/.webp/.png, name.component.php(but not the part of the `component.php`), Name.utils.php(but not the part of the `utils.php`)

## Resources

<!-- TODO: Add References -->

| Title        | Purpose                                                                       | Link          |
| ------------ | ----------------------------------------------------------------------------- | ------------- |
| PHP Manual | To guide PHP syntax, functions, and file inclusion. | https://www.php.net/manual/en/ |
| ChatGPT | Clarifying concepts, improving code structure, and exploring better implementation approaches. | https://chat.openai.com/ |
| W3School | Quick HTML and CSS syntax checks, and for basic styling guidance during development. | https://www.w3schools.com/ |
