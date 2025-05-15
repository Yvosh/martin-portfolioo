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
            <div class="flex-shrink-0 w-full md:w-2/4">
                <div class="flex space-x-2">
                    <img src="../images/Capstone/1. Login Page/1. Login.png" alt="Main Project" class="rounded-lg w-2/2 shadow-md" />
                </div>
            </div>

            <!-- Right: Description + Button -->
            <div class="w-full md:w-1/2 text-left">
                <h1 class="text-3xl font-bold mb-7">DocuTracking</h1>
                <p class="text-gray-740 mb-5"><strong>Role: UI/UX, Front-End, and Back-End</strong><br /></p>
                <p class="text-gray-300 mb-4">
                    Category: Website Application<br />
                    Status: Completed<br />
                    Client: Quality Assurance Office <br />
                    Platform: HTML, JS, CSS (Front-End) PHP (Back-End) MySQL (Database)<br> <br>
                    Contribution: Designed the user interface (UI) and User Experience (UX) using Figma and implemented it in code. Responsible for developing 90% of the web-based 'Document Tracking System' application, including its implementation and functionality. Developed the front end with HTML, CSS, and JavaScript, the backend with PHP, and the database using MySQL. <br> <br>
                    I did not make the following pages: Report Page (Back-end) and Messages (Back-end)<br><br>
                    Purpose: To replace the traditional logbook and help track the last person who received the document.
                </p>
                <p class="text-gray-740 mb-5"><strong>I’ve decided not to publish my website here to protect my school’s privacy. Thank you for understanding</strong><br /></p>
            </div>
        </div>
    </section>

    <p class="w-[96%] px-[2%] text-xl font-semibold text-gray-200 mt-10 ml-10 bg-gray-800 rounded-md py-3 shadow-lg shadow-gray-900">
        Login Page
    </p>
    <!-- GALLERY SECTION -->
    <section class="px-[2%] p-1 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-10 mt-10">
        <!-- Example cards -->
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(0)">
            <img src="../images/Capstone/1. Login Page/1. Login.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Login</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(1)">
            <img src="../images/Capstone/1. Login Page/2. Invalid_Username_Error.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Invalid</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(2)">
            <img src="../images/Capstone/1. Login Page/3. Reset_Password.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Reset Password</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(3)">
            <img src="../images/Capstone/1. Login Page/4.1 Check Reset Code .png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Check Reset Code</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(4)">
            <img src="../images/Capstone/1. Login Page/4.2 Confirm_Password.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Confirm Password</h2>
        </div>
    </section>

    <p class="w-[96%] px-[2%] text-xl font-semibold text-gray-200 mt-10 ml-10 bg-gray-800 rounded-md py-3 shadow-lg shadow-gray-900">
        Dashboard Page
    </p>
    <!-- GALLERY SECTION -->
    <section class="px-[2%] p-1 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-10 mt-10">
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(5)">
            <img src="../images/Capstone/2. Dashboard Page/1. Dashboard.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Dashboard</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(6)">
            <img src="../images/Capstone/2. Dashboard Page/2. Message Notification.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Message Notification </h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(7)">
            <img src="../images/Capstone/2. Dashboard Page/3. Notifications Popup.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Notifications</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(8)">
            <img src="../images/Capstone/2. Dashboard Page/4. Composing the letter.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Composing a Letter </h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(9)">
            <img src="../images/Capstone/2. Dashboard Page/5. Choosing Recipients.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Choosing Recipients</h2>
        </div>
    </section>

    <p class="w-[96%] px-[2%] text-xl font-semibold text-gray-200 mt-10 ml-10 bg-gray-800 rounded-md py-3 shadow-lg shadow-gray-900">
        Template Page
    </p>
    <!-- GALLERY SECTION -->
    <section class="px-[2%] p-1 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-10 mt-10">
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(10)">
            <img src="../images/Capstone/3. Template Page/1. Uploading a Template.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Uploading a Template (Admin) </h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(11)">
            <img src="../images/Capstone/3. Template Page/1.2 Uploading a Template.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Uploading a Template (Admin)</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(12)">
            <img src="../images/Capstone/3. Template Page/Template_Other Users Side.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Template Page (Other User)</h2>
        </div>
    </section>

    <p class="w-[96%] px-[2%] text-xl font-semibold text-gray-200 mt-10 ml-10 bg-gray-800 rounded-md py-3 shadow-lg shadow-gray-900">
        Files Page
    </p>
    <!-- GALLERY SECTION -->
    <section class="px-[2%] p-1 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-10 mt-10">
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(13)">
            <img src="../images/Capstone/4. Files Page/1.1 All Files.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">All Files</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(14)">
            <img src="../images/Capstone/4. Files Page/1.2 Inbox Page.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Inbox Page</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(15)">
            <img src="../images/Capstone/4. Files Page/1.3 Sent Page.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Sent Page</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(16)">
            <img src="../images/Capstone/4. Files Page/1.4 Archive Files.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Archive Files</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(17)">
            <img src="../images/Capstone/4. Files Page/2. Edit Document.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Edit Documents</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(18)">
            <img src="../images/Capstone/4. Files Page/2.1 Edit Document.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Edit Document</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(19)">
            <img src="../images/Capstone/4. Files Page/2.2 Edit Document.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Edit Document</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(20)">
            <img src="../images/Capstone/4. Files Page/3. View Document.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">View Document</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(21)">
            <img src="../images/Capstone/4. Files Page/3.1 View Document.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">View Document</h2>
        </div>
    </section>

    <p class="w-[96%] px-[2%] text-xl font-semibold text-gray-200 mt-10 ml-10 bg-gray-800 rounded-md py-3 shadow-lg shadow-gray-900">
        Logs Page
    </p>
    <section class="px-[2%] p-1 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-10 mt-10">
        <!-- GALLERY SECTION -->
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(22)">
            <img src="../images/Capstone/5. Logs Page/1. Logs.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Logs</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(23)">
            <img src="../images/Capstone/5. Logs Page/2. Notification.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Notification</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(24)">
            <img src="../images/Capstone/5. Logs Page/3 Archived Logs.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Archived Logs</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(25)">
            <img src="../images/Capstone/5. Logs Page/4. Archived Notification.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Archived Notification</h2>
        </div>
    </section>

    <p class="w-[96%] px-[2%] text-xl font-semibold text-gray-200 mt-10 ml-10 bg-gray-800 rounded-md py-3 shadow-lg shadow-gray-900">
        Report Page
    </p>
    <!-- GALLERY SECTION -->
    <section class="px-[2%] p-1 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-10 mt-10">
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(26)">
            <img src="../images/Capstone/6. Report Page/1. Report.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Report</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(27)">
            <img src="../images/Capstone/6. Report Page/2. Saving Report.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Saving Report</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(28)">
            <img src="../images/Capstone/6. Report Page/Generated_Report.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Generated Report</h2>
        </div>
    </section>

    <p class="w-[96%] px-[2%] text-xl font-semibold text-gray-200 mt-10 ml-10 bg-gray-800 rounded-md py-3 shadow-lg shadow-gray-900">
        Note Page
    </p>
    <section class="px-[2%] p-1 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-10 mt-10">
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(29)">
            <img src="../images/Capstone/7. Notes Page/1. Notes .png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Notes</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(30)">
            <img src="../images/Capstone/7. Notes Page/2 Create Notes.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Create Notes</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(31)">
            <img src="../images/Capstone/7. Notes Page/2.1 Success.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Success</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(32)">
            <img src="../images/Capstone/7. Notes Page/3. Search Notes.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Search Notes</h2>
        </div>
    </section>


    <p class="w-[96%] px-[2%] text-xl font-semibold text-gray-200 mt-10 ml-10 bg-gray-800 rounded-md py-3 shadow-lg shadow-gray-900">
        User Account Page (Admin Only)
    </p>
    <section class="px-[2%] p-1 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-10 mt-10">

        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(33)">
            <img src="../images/Capstone/8. User Account Page (Admin Side only)/1. Create Accounts.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Create Accounts</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(34)">
            <img src="../images/Capstone/8. User Account Page (Admin Side only)/1.2 Create Accounts.png class=" rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Create Accounts</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(35)">
            <img src="../images/Capstone/8. User Account Page (Admin Side only)/2. Accounts.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Accounts</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(36)">
            <img src="../images/Capstone/8. User Account Page (Admin Side only)/3. Inactive Users.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Inactive Users</h2>
        </div>
    </section>

    <p class="w-[96%] px-[2%] text-xl font-semibold text-gray-200 mt-10 ml-10 bg-gray-800 rounded-md py-3 shadow-lg shadow-gray-900">
        Account Page
    </p>
    <section class="px-[2%] p-1 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-10 mt-10">
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(37)">
            <img src="../images/Capstone/Account Page/1. Account Details.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Account Details</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(38)">
            <img src="../images/Capstone/Account Page/1. Change Account Details.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Change Account Details</h2>
        </div>
    </section>
    <p class="w-[96%] px-[2%] text-xl font-semibold text-gray-200 mt-10 ml-10 bg-gray-800 rounded-md py-3 shadow-lg shadow-gray-900">
        Messenger Page
    </p>
    <section class="px-[2%] p-1 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-10 mt-10">
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(39)">
            <img src="../images/Capstone/Messages Page/1. Message (inbox) .png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Message (Inbox)</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(40)">
            <img src="../images/Capstone/Messages Page/2. New Message.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">New Message</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(41)">
            <img src="../images/Capstone/Messages Page/3.1 Sender.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Sender</h2>
        </div>
        <div class="bg-gray-900 p-3 rounded-lg shadow-md hover:scale-105 hover:shadow-xl transition transform duration-300 cursor-pointer" onclick="openModal(42)">
            <img src="../images/Capstone/Messages Page/3.2 Receiver.png" class="rounded-md mb-3 w-full" />
            <h2 class="text-lg font-semibold text-center">Receiver</h2>
        </div>
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
                <img id="lightbox-img" src="" alt="Zoomed Image" class="w-[90%] h-[75vh] object-contain rounded-md shadow-md transition duration-300" />

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
        const images = [
            // Login Page
            {
                src: "../images/Capstone/1. Login Page/1. Login.png",
                title: "Login"
            },
            {
                src: "../images/Capstone/1. Login Page/2. Invalid_Username_Error.png",
                title: "Invalid"
            },
            {
                src: "../images/Capstone/1. Login Page/3. Reset_Password.png",
                title: "Reset Password"
            },
            {
                src: "../images/Capstone/1. Login Page/4.1 Check Reset Code .png",
                title: "Check Reset Code"
            },
            {
                src: "../images/Capstone/1. Login Page/4.2 Confirm_Password.png",
                title: "Confirm Password"
            },

            // Dashboard Page
            {
                src: "../images/Capstone/2. Dashboard Page/1. Dashboard.png",
                title: "Dashboard"
            },
            {
                src: "../images/Capstone/2. Dashboard Page/2. Message Notification.png",
                title: "Message Notification"
            },
            {
                src: "../images/Capstone/2. Dashboard Page/3. Notifications Popup.png",
                title: "Notifications"
            },
            {
                src: "../images/Capstone/2. Dashboard Page/4. Composing the letter.png",
                title: "Composing a Letter"
            },
            {
                src: "../images/Capstone/2. Dashboard Page/5. Choosing Recipients.png",
                title: "Choosing Recipients"
            },

            // Template Page
            {
                src: "../images/Capstone/3. Template Page/1. Uploading a Template.png",
                title: "Uploading a Template (Admin)"
            },
            {
                src: "../images/Capstone/3. Template Page/1.2 Uploading a Template.png",
                title: "Uploading a Template (Admin)"
            },
            {
                src: "../images/Capstone/3. Template Page/Template_Other Users Side.png",
                title: "Template Page (Other User)"
            },

            // Files Page
            {
                src: "../images/Capstone/4. Files Page/1.1 All Files.png",
                title: "All Files"
            },
            {
                src: "../images/Capstone/4. Files Page/1.2 Inbox Page.png",
                title: "Inbox Page"
            },
            {
                src: "../images/Capstone/4. Files Page/1.3 Sent Page.png",
                title: "Sent Page"
            },
            {
                src: "../images/Capstone/4. Files Page/1.4 Archive Files.png",
                title: "Archive Files"
            },
            {
                src: "../images/Capstone/4. Files Page/2. Edit Document.png",
                title: "Edit Documents"
            },
            {
                src: "../images/Capstone/4. Files Page/2.1 Edit Document.png",
                title: "Edit Document"
            },
            {
                src: "../images/Capstone/4. Files Page/2.2 Edit Document.png",
                title: "Edit Document"
            },
            {
                src: "../images/Capstone/4. Files Page/3. View Document.png",
                title: "View Document"
            },
            {
                src: "../images/Capstone/4. Files Page/3.1 View Document.png",
                title: "View Document"
            },

            // Logs Page
            {
                src: "../images/Capstone/5. Logs Page/1. Logs.png",
                title: "Logs"
            },
            {
                src: "../images/Capstone/5. Logs Page/2. Notification.png",
                title: "Notification"
            },
            {
                src: "../images/Capstone/5. Logs Page/3 Archived Logs.png",
                title: "Archived Logs"
            },
            {
                src: "../images/Capstone/5. Logs Page/4. Archived Notification.png",
                title: "Archived Notification"
            },

            // Report Page
            {
                src: "../images/Capstone/6. Report Page/1. Report.png",
                title: "Report"
            },
            {
                src: "../images/Capstone/6. Report Page/2. Saving Report.png",
                title: "Saving Report"
            },
            {
                src: "../images/Capstone/6. Report Page/Generated_Report.png",
                title: "Generated Report"
            },

            // Note Page
            {
                src: "../images/Capstone/7. Notes Page/1. Notes .png",
                title: "Notes"
            },
            {
                src: "../images/Capstone/7. Notes Page/2 Create Notes.png",
                title: "Create Notes"
            },
            {
                src: "../images/Capstone/7. Notes Page/2.1 Success.png",
                title: "Success"
            },
            {
                src: "../images/Capstone/7. Notes Page/3. Search Notes.png",
                title: "Search Notes"
            },

            // User Account Page (Admin Only)
            {
                src: "../images/Capstone/8. User Account Page (Admin Side only)/1. Create Accounts.png",
                title: "Create Accounts"
            },
            {
                src: "../images/Capstone/8. User Account Page (Admin Side only)/1.2 Create Accounts.png",
                title: "Create Accounts"
            },
            {
                src: "../images/Capstone/8. User Account Page (Admin Side only)/2. Accounts.png",
                title: "Accounts"
            },
            {
                src: "../images/Capstone/8. User Account Page (Admin Side only)/3. Inactive Users.png",
                title: "Inactive Users"
            },

            // Account Page
            {
                src: "../images/Capstone/Account Page/1. Account Details.png",
                title: "Account Details"
            },
            {
                src: "../images/Capstone/Account Page/1. Change Account Details.png",
                title: "Change Account Details"
            },

            // Messenger Page
            {
                src: "../images/Capstone/Messages Page/1. Message (inbox) .png",
                title: "Message (Inbox)"
            },
            {
                src: "../images/Capstone/Messages Page/2. New Message.png",
                title: "New Message"
            },
            {
                src: "../images/Capstone/Messages Page/3.1 Sender.png",
                title: "Sender"
            },
            {
                src: "../images/Capstone/Messages Page/3.2 Receiver.png",
                title: "Receiver"
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