const developerTypes = ["Web Developer", "Mobile Developer", "Desain Grafis"];
  
  // Indeks saat ini dalam array developerTypes
  let currentIndex = 0;
  
  // Mendapatkan elemen di mana teks tipe pengembang akan ditampilkan
  const developerTypeElement = document.getElementById("developer-type");

  // Fungsi untuk memulai efek mengetik
  function startTypingEffect() {
    if (currentIndex >= developerTypes.length) {
      currentIndex = 0;
    }

    const currentType = developerTypes[currentIndex];
    currentIndex++;

    typeText(currentType, 0);
  }

  // Fungsi untuk mengetikkan teks secara berurutan
  function typeText(text, charIndex) {
    if (charIndex < text.length) {
      developerTypeElement.textContent = text.substring(0, charIndex + 1);
      setTimeout(() => typeText(text, charIndex + 1), 100);
    } else {
      setTimeout(() => deleteText(text, text.length), 1000);
    }
  }

  // Fungsi untuk menghapus teks dengan animasi
  function deleteText(text, charIndex) {
    if (charIndex >= 0) {
      developerTypeElement.textContent = text.substring(0, charIndex);
      setTimeout(() => deleteText(text, charIndex - 1), 50);
    } else {
      setTimeout(startTypingEffect, 500);
    }
  }

  // Event listener saat pengguna menggulir halaman
  window.addEventListener("scroll", function() {
    const navbar = document.querySelector(".navbar");
    if (window.scrollY > 0) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });

  // Memulai efek ketik pada tipe pengembang
  developerTypeElement.style.animation = "slideFromTop 1s ease-in-out";
  startTypingEffect();

  // Fungsi untuk memeriksa apakah elemen dalam viewport
  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  // Fungsi untuk menangani animasi saat pengguna menggulir halaman
  function animateOnScroll() {
    const animateElements = document.querySelectorAll(".animate-on-scroll");
    
    animateElements.forEach(element => {
      if (isInViewport(element)) {
        element.classList.add("active");
      }
    });
  }

  // Event listener saat pengguna menggulir halaman
  window.addEventListener("scroll", animateOnScroll);

  // Memeriksa animasi saat halaman dimuat
  animateOnScroll();
  AOS.init();