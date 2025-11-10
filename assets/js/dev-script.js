 // ✅ Open Modal
    document.getElementById("openModal").onclick = function () {
      document.getElementById("catalogModal").style.display = "flex";
    };

    // ✅ Close Modal
    document.querySelector(".close").onclick = function () {
      document.getElementById("catalogModal").style.display = "none";
    };

    // ✅ Send Button
    document.getElementById("sendBtn").onclick = function () {
      let number = document.getElementById("userNumber").value.trim();

      // ✅ Validation: only digits and exactly 10 digits
      let phoneRegex = /^[0-9]{10}$/;
      if (!phoneRegex.test(number)) {
        alert("Please enter a valid 10-digit phone number");
        return;
      }

      // ✅ WhatsApp message
      let whatsappMessage = `Hello, I want to inquire about the catalog. My contact number is: ${number}`;
      let whatsappURL = `https://wa.me/918980002618?text=${encodeURIComponent(whatsappMessage)}`;

      // ✅ Open WhatsApp in new tab
      window.open(whatsappURL, "_blank");

      // ✅ Show success message
      let msg = document.getElementById("successMsg");
      msg.style.display = "block";

      // ✅ Close modal after short delay
      setTimeout(() => {
        document.getElementById("catalogModal").style.display = "none";
      }, 1200);

      // ✅ After message, open & auto-download catalog
      setTimeout(() => {
        window.open("assets/images/catalog/apple-cera-cata-1.pdf", "_blank");

        // Auto-download catalog
        const a = document.createElement("a");
        a.href = "assets/images/catalog/apple-cera-cata-1.pdf";
        a.download = "assets/images/catalog/apple-cera-cata-1.pdf";
        a.click();
      }, 1500);
    };