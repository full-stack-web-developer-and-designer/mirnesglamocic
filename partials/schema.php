<?php
// Schema.org JSON-LD
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Person",
      "@id": "https://mirnesglamocic.com/#person",
      "name": "Mirnes Glamočić",
      "url": "https://mirnesglamocic.com",
      "jobTitle": [
        "Professional Web Developer",
        "Web Designer"
      ],
      "description": "Professional web developer and web designer from Bosnia and Herzegovina.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Borovi 22",
        "postalCode": "70101",
        "addressLocality": "Jajce",
        "addressCountry": "BA"
      },
      "sameAs": [
        "https://github.com/full-stack-web-developer-and-designer",
        "https://www.linkedin.com/in/mirnesglamocic"
      ],
      "knowsAbout": [
        "Web Development",
        "Web Design",
        "Full Stack Development",
        "Frontend Development",
        "Backend Development",
        "HTML",
        "CSS",
        "JavaScript",
        "PHP",
        "MySQL",
        "Accessibility (WCAG)"
      ]
    },
    {
      "@type": "WebSite",
      "@id": "https://mirnesglamocic.com/#website",
      "url": "https://mirnesglamocic.com",
      "name": "Mirnes Glamočić – Web Developer & Designer",
      "publisher": {
        "@id": "https://mirnesglamocic.com/#person"
      },
      "inLanguage": "en"
    },
    {
      "@type": "WebPage",
      "@id": "https://mirnesglamocic.com/#homepage",
      "url": "https://mirnesglamocic.com",
      "name": "Portfolio of Mirnes Glamočić",
      "isPartOf": {
        "@id": "https://mirnesglamocic.com/#website"
      },
      "about": {
        "@id": "https://mirnesglamocic.com/#person"
      }
    }
  ]
}
</script>
