<!DOCTYPE html>
<html lang="en" class="bg-black text-white">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Work Showcase</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="projects.css">
</head>

<body class="font-sans">
  <?php include '../components/header_project.php'; ?>

  <!-- MAIN CONTENT -->
  <section class="px-[5%] p-6 bg-gray-900 rounded-xl shadow-lg mt-8 ml-10 mr-10">
    <div class="flex flex-col md:flex-row gap-6 items-center">
      <!-- Left: Main Image -->
      <div class="flex-shrink-0 w-full md:w-1/2">
        <img src="../images/BeastLink UI/1.png" alt="Main Project" class="rounded-lg w-full shadow-md" />
      </div>
      <!-- Right: Description + Button -->
      <div class="w-full md:w-1/2 text-left">
        <h1 class="text-3xl font-bold mb-8">BeastLink (School System: Document & Requirements)</h1>
        <p class="text-gray-740 mb-5"><strong>Role: UI/UX </strong><br /></p>
        <p class="text-gray-300 mb-24">
          Category: Web Application<br />
          Status: Completed<br />
          Client: Student from PLV<br />
          Platform: Figma<br> <br>
          Purpose: School Project <br>
          Client-Provided Palette: Dove Gray (11 Colors) and Caribbean Green (11 Colors)
        </p>        
        <!-- <a href="https://example.com" target="_blank" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-5 rounded-full transition">
          Click here to redirect
        </a> -->
      </div>
    </div>
  </section>

  <p class="w-[96%] px-[2%] text-xl font-semibold text-gray-200 mt-10 ml-10 bg-gray-800 rounded-md py-3 shadow-lg shadow-gray-900">
    Applicant Side
  </p>
  <!-- GALLERY SECTION -->
  <section class="px-[2%] p-1 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-10 mt-10">
    <!-- Example cards -->
    <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(1)">
      <img src="../images/BeastLink UI/1.png" class="rounded-md mb-3 w-full" />
      <h2 class="text-lg font-semibold text-center">[Draft] Applicant View</h2>
    </div>
    <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(2)">
      <img src="../images/BeastLink UI/Applicant Side/1.Applicant View.png" class="rounded-md mb-3 w-full" />
      <h2 class="text-lg font-semibold text-center">Applicant View</h2>
    </div>
    <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(3)">
      <img src="../images/BeastLink UI/Applicant Side/2. Uploading Files.png" class="rounded-md mb-3 w-full" />
      <h2 class="text-lg font-semibold text-center">Upload a Files</h2>
    </div>
    <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(4)">
      <img src="../images/BeastLink UI/Applicant Side/2.1 Choosing a File.png" class="rounded-md mb-3 w-full" />
      <h2 class="text-lg font-semibold text-center">Choosing a File</h2>
    </div>
    <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(5)">
      <img src="../images/BeastLink UI/Applicant Side/3. Uploaded Files.png" class="rounded-md mb-3 w-full" />
      <h2 class="text-lg font-semibold text-center">Uploaded Files</h2>
    </div>
    <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(6)">
      <img src="../images/BeastLink UI/Applicant Side/3.1 Viewing Uploaded Files.png" class="rounded-md mb-3 w-full" />
      <h2 class="text-lg font-semibold text-center">Viewing of Files</h2>
    </div>
    <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(7)">
      <img src="../images/BeastLink UI/Applicant Side/2.2 Error.png" class="rounded-md mb-3 w-full" />
      <h2 class="text-lg font-semibold text-center">Error- Wrong File Format </h2>
    </div>
    <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(8)">
      <img src="../images/BeastLink UI/Applicant Side/2.3 Error.png" class="rounded-md mb-3 w-full" />
      <h2 class="text-lg font-semibold text-center">Error- Exceed File Limit </h2>
    </div>
    <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(9)">
      <img src="../images/BeastLink UI/Applicant Side/2.4 Success Message.png" class="rounded-md mb-3 w-full" />
      <h2 class="text-lg font-semibold text-center">Success </h2>
    </div>
  </section>

  <p class="w-[96%] px-[2%] text-xl font-semibold text-gray-200 mt-10 ml-10 bg-gray-800 rounded-md py-3 shadow-lg shadow-gray-900">
    Admin Side
  </p>
  <!-- GALLERY SECTION -->
  <section class="px-[2%] p-1 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-10 mt-10">
    <!-- Example cards -->
    <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(10)">
      <img src="../images/BeastLink UI/Admin Side/1. Admin View.png" class="rounded-md mb-3 w-full" />
      <h2 class="text-lg font-semibold text-center">Admin View</h2>
    </div>
    <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(11)">
      <img src="../images/BeastLink UI/Admin Side/2. Admin (Approve and Reject).png" class="rounded-md mb-3 w-full" />
      <h2 class="text-lg font-semibold text-center">Approve and Reject</h2>
    </div>
    <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(12)">
      <img src="../images/BeastLink UI/Admin Side/2.1 Confirmation.png" class="rounded-md mb-3 w-full" />
      <h2 class="text-lg font-semibold text-center">Confirmation</h2>
    </div>
    <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(13)">
      <img src="../images/BeastLink UI/Admin Side/2.2 Confirmation.png" class="rounded-md mb-3 w-full" />
      <h2 class="text-lg font-semibold text-center">Confirmation</h2>
    </div>
    <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(14)">
      <img src="../images/BeastLink UI/Admin Side/3.2 Approved File.png" class="rounded-md mb-3 w-full" />
      <h2 class="text-lg font-semibold text-center">Approved Files</h2>
    </div>
    <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(15)">
      <img src="../images/BeastLink UI/Admin Side/3. Rejected File.png" class="rounded-md mb-3 w-full" />
      <h2 class="text-lg font-semibold text-center">Rejected File </h2>
    </div>
    <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(16)">
      <img src="../images/BeastLink UI/Admin Side/3.2 Approved File.png" class="rounded-md mb-3 w-full" />
      <h2 class="text-lg font-semibold text-center">Approved File</h2>
    </div>
  </section>

  <!-- MODAL -->
  <div id="lightbox" class="fixed inset-0 bg-black bg-opacity-90 hidden flex items-center justify-center z-50 px-[17%]">
    <!-- Container -->
    <div class="w-full bg-gray-800 rounded-lg shadow-xl">
      <!-- Modal Header -->
      <div class="flex justify-between items-center px-6 py-4 border-b border-gray-700">
        <h2 id="modal-title" class="text-2xl font-semibold text-white">Project Title</h2>
        <button onclick="closeModal()" class="text-white text-3xl hover:text-red-400">&times;</button>
      </div>

      <!-- Modal Image Area -->
      <div class="relative bg-gray-900 p-6 flex items-center justify-center rounded-b-lg" style="min-height: 80vh;">
        <!-- Left Arrow -->
        <button onclick="prevImage()" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full shadow-lg z-10">
          &larr;
        </button>

        <!-- Image -->
        <img id="lightbox-img" src="" alt="Zoomed Image" class="w-full h-[75vh] object-contain rounded-md shadow-md transition duration-300" />

        <!-- Right Arrow -->
        <button onclick="nextImage()" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full shadow-lg z-10">
          &rarr;
        </button>
      </div>
    </div>
  </div>

<?php include '../components/footer.php'; ?>

  <!-- BACK TO TOP SCRIPT -->
  <script>
    // Show/Hide Back to Top Button
    window.onscroll = function() {
      const backToTopBtn = document.getElementById('back-to-top');
      if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        backToTopBtn.style.display = "block";
      } else {
        backToTopBtn.style.display = "none";
      }
    };

    // Scroll to top function
    function scrollToTop() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    }
  </script>

  <!-- Modal Script -->
  <script>
    const images = [{
        src: "../images/BeastLink UI/1.png",
        title: "Applicant: [Draft] Applicant View"
      },
      {
        src: "../images/BeastLink UI/1.png",
        title: "Applicant: [Draft] Applicant View"
      },
      {
        src: "../images/BeastLink UI/Applicant Side/1.Applicant View.png",
        title: "Applicant: Applicant View"
      },
      {
        src: "../images/BeastLink UI/Applicant Side/2. Uploading Files.png",
        title: "Applicant: Upload a Files"
      },
      {
        src: "../images/BeastLink UI/Applicant Side/2.1 Choosing a File.png",
        title: "Applicant: Choosing a File"
      },
      {
        src: "../images/BeastLink UI/Applicant Side/3. Uploaded Files.png",
        title: "Applicant: Uploaded Files"
      },
      {
        src: "../images/BeastLink UI/Applicant Side/3.1 Viewing Uploaded Files.png",
        title: "Applicant: Viewing of Files"
      },
      {
        src: "../images/BeastLink UI/Applicant Side/2.2 Error.png",
        title: "Applicant: Error- Wrong File Format"
      },
      {
        src: "../images/BeastLink UI/Applicant Side/2.3 Error.png",
        title: "Applicant: Error- Exceed File Limit"
      },
      {
        src: "../images/BeastLink UI/Applicant Side/2.4 Success Message.png",
        title: "Applicant: Success"
      },
      {
        src: "../images/BeastLink UI/Admin Side/1. Admin View.png",
        title: "Admin: Admin View"
      },
            {
        src: "../images/BeastLink UI/Admin Side/2. Admin (Approve and Reject).png",
        title: "Admin: Approve and Reject"
      },
      {
        src: "../images/BeastLink UI/Admin Side/2. Admin (Approve and Reject).png",
        title: "Admin: Approve and Reject"
      },
      {
        src: "../images/BeastLink UI/Admin Side/2.1 Confirmation.png",
        title: "Admin: Confirmation"
      },
      {
        src: "../images/BeastLink UI/Admin Side/2.2 Confirmation.png",
        title: "Admin: Confirmation"
      },
      {
        src: "../images/BeastLink UI/Admin Side/3.2 Approved File.png",
        title: "Admin: Approved Files"
      },
      {
        src: "../images/BeastLink UI/Admin Side/3. Rejected File.png",
        title: "Admin: Rejected File"
      },
      {
        src: "../images/BeastLink UI/Admin Side/3.2 Approved File.png",
        title: "Admin: Approved File"
      }
    ];

    let currentIndex = 0;

    function openModal(index) {
      currentIndex = index;
      document.getElementById('lightbox-img').src = images[currentIndex].src;
      document.getElementById('modal-title').textContent = images[currentIndex].title;
      document.getElementById('lightbox').classList.remove('hidden');
    }

    function closeModal() {
      document.getElementById('lightbox').classList.add('hidden');
    }

    function nextImage() {
      currentIndex = (currentIndex + 1) % images.length;
      document.getElementById('lightbox-img').src = images[currentIndex].src;
      document.getElementById('modal-title').textContent = images[currentIndex].title;
    }

    function prevImage() {
      currentIndex = (currentIndex - 1 + images.length) % images.length;
      document.getElementById('lightbox-img').src = images[currentIndex].src;
      document.getElementById('modal-title').textContent = images[currentIndex].title;
    }

    document.addEventListener('keydown', function(event) {
      const modal = document.getElementById('lightbox');
      if (!modal.classList.contains('hidden')) {
        if (event.key === 'ArrowRight') {
          nextImage();
        } else if (event.key === 'ArrowLeft') {
          prevImage();
        } else if (event.key === 'Escape') {
          closeModal();
        }
      }
    });
  </script>

</body>

</html>