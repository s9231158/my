<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>個人網站履歷</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* 自定义样式 */
        body {
            background-color: #f0f4f8;
        }
        .profile-section {
            background: url('assets/images/baner-right-image-01.jpg') no-repeat center center;
            background-size: cover;
            text-align: center;
            padding: 60px 20px;
            color: white;
        }
        .profile-section img {
            border-radius: 50%;
            width: 320px; /* 增加头像大小 */
            height: 320px;
            object-fit: cover;
            border: 4px solid white;
        }
        .stats {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .stats div {
            text-align: center;
            color: white;
        }
        .view-count {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px 20px;
            border-radius: 8px;
            color: white;
            z-index: 1000;
        }
        .education-section {
            margin-top: 20px;
            text-align: center;
        }
        .education-section h2 {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .education-section p {
            margin-top: 5px;
            font-size: 1.2rem;
        }
        .skills, .work, .projects {
            margin-top: 40px;
        }
        .skills img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto;
        }
        .project img {
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .key-section {
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            margin-top: 20px;
        }
        /* 自定义社交媒体图标的样式 */
        .social-media-links img {
            width: 40px;
            height: 40px;
            margin-top: 10px;
        }
        /* 响应式设计 */
        @media (max-width: 768px) {
            .stats {
                flex-direction: column;
            }
            .skills img {
                width: 50px;
                height: 50px;
            }
            .projects img {
                width: 100%;
            }
            .work, .projects {
                padding-left: 10px;
                padding-right: 10px;
            }
        }

        @media (max-width: 480px) {
            .profile-section img {
                width: 120px; /* 调整小屏幕下的头像大小 */
                height: 120px;
            }
            .stats {
                flex-direction: column;
            }
            .key-section {
                padding-left: 10px;
                padding-right: 10px;
            }
            .view-count {
                right: 10px;
                bottom: 10px;
                padding: 8px 16px;
            }
        }
    </style>
</head>
<body>

<!-- 頭部部分 -->
<header class="profile-section">
    <img src="assets/images/baner-right-image-01.jpg" alt="Profile Picture">
    <h1 class="text-4xl font-bold mt-4">柯智勛</h1>
    <div class="education-section">
        <h2>最高學歷</h2>
        <p>學士學位 - 國立臺灣大學</p>
    </div>
    <!-- 社交媒體圖標 -->
    <div class="social-media-links mt-4">
        <a href="https://www.linkedin.com" target="_blank">
            <img src="assets/icons/linkedin.png" alt="LinkedIn" class="inline-block">
        </a>
        <a href="https://github.com" target="_blank">
            <img src="assets/icons/github.png" alt="GitHub" class="inline-block">
        </a>
        <!-- 可以添加更多社交媒体图标 -->
    </div>
</header>



    <!-- 主要內容 -->
    <main class="container mx-auto px-4 py-8">
        <!-- 關鍵技能 -->
        <section class="skills key-section">
            <h2 class="text-3xl font-bold mb-6">相關技能</h2>
            <div class="grid grid-cols-2 md:grid-cols-6 gap-4">
                <div class="text-center">
                    <img src="assets/images/baner-right-image-01.jpg" alt="Skill 1">
                    <p class="mt-2">Laravel</p>
                </div>
                <div class="text-center">
                    <img src="assets/images/baner-right-image-01.jpg" alt="Skill 2">
                    <p class="mt-2">PHP</p>
                </div>
                <div class="text-center">
                    <img src="assets/images/baner-right-image-01.jpg" alt="Skill 3">
                    <p class="mt-2">MySQL</p>
                </div>
                <div class="text-center">
                    <img src="assets/images/baner-right-image-01.jpg" alt="Skill 4">
                    <p class="mt-2">AWS</p>
                </div>
                <div class="text-center">
                    <img src="assets/images/baner-right-image-01.jpg" alt="Skill 5">
                    <p class="mt-2">Docker</p>
                </div>
                <div class="text-center">
                    <img src="assets/images/baner-right-image-01.jpg" alt="Skill 6">
                    <p class="mt-2">JavaScript</p>
                </div>
            </div>
        </section>

        <!-- 工作經驗 -->
        <section class="work key-section mt-8">
            <h2 class="text-3xl font-bold mb-6">近期工作經歷</h2>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-gray-100 p-6 rounded">
                    <h3 class="font-bold text-xl">3D列印組裝</h3>
                    <p class="text-sm text-gray-600">Company Name</p>
                    <p>Short description about the responsibilities and achievements.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded">
                    <h3 class="font-bold text-xl">活動企劃人員</h3>
                    <p class="text-sm text-gray-600">Company Name</p>
                    <p>Short description about the responsibilities and achievements.</p>
                </div>
            </div>
        </section>
<!-- 自傳區域 -->
<section class="container mx-auto px-4 py-8">
    <div class="bg-white p-6 rounded shadow-lg grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- 自傳文字部分 -->
        <div>
            <h2 class="text-3xl font-bold mb-4">自傳</h2>
            <p>這裡是自傳的文字內容。簡要介紹您的背景、經歷和成就，讓讀者更好地了解您。</p>

        </div>
        <!-- 自傳影片部分 -->
        <div>
            <h2 class="text-3xl font-bold mb-4">自傳影片</h2>
            <video controls class="w-full rounded">
                <source src="assets/videos/biography.mp4" type="video/mp4">
                您的瀏覽器不支持影片播放。
            </video>
        </div>
    </div>
</section>


        <!-- 作品集 -->
        <section class="projects key-section mt-8">
            <h2 class="text-3xl font-bold mb-6">作品集</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-gray-100 p-6 rounded">
                    <img src="assets/images/baner-right-image-01.jpg" alt="Project 1">
                    <p class="mt-4">Project 1 description.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded">
                    <img src="assets/images/baner-right-image-01.jpg" alt="Project 2">
                    <p class="mt-4">Project 2 description.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded">
                    <img src="assets/images/baner-right-image-01.jpg" alt="Project 3">
                    <p class="mt-4">Project 3 description.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- 側邊欄 -->
    <aside class="container mx-auto px-4 mt-16">
        <!-- 聯繫信息 -->
        <section class="bg-gray-100 p-6 rounded shadow-lg mb-8">
            <h2 class="text-2xl font-bold mb-4">聯繫方式</h2>
            <p>Email: example@example.com</p>
            <p>Phone: 123-456-7890</p>
            <div class="mt-4">
                <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded">Download Resume</a>
            </div>
        </section>
    </aside>

    <!-- 浏览人数浮动显示 -->
    <div class="view-count">
        <h4 class="text-2xl font-bold">瀏覽人數</h4>
        <p>1239</p>
    </div>

</body>
</html>
