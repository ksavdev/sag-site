import './sass/style.scss'

gsap.fromTo("path", 
    { drawSVG: "0%" }, 
    { drawSVG: "100%", duration: 2, ease: "power2.out", onComplete: hidePreloader }
  );

  function hidePreloader() {
    gsap.to("#preloader", { opacity: 0, duration: 0.5, onComplete: () => document.getElementById("preloader").remove() });
  }




