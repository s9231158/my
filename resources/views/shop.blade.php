<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品頁面</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
        }

        .product-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .product-images {
    width: 60%;
    max-width: 600px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.main-image {
    width: 100%;
    height: 650px; /* 固定主圖片高度 */
    object-fit: cover;
    border-radius: 10px;
    background-color: #f0f0f0; /* 避免圖片加載時出現空白 */
}

        .thumbnail-wrapper {
            position: relative;
            margin-top: 10px;
        }

        .thumbnail-container {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
        }

        .thumbnail-container::-webkit-scrollbar {
            display: none;
        }

        .thumbnail-container img {
    flex-shrink: 0;
    width: 100px;
    height: 100px;
    margin-right: 10px;
    border-radius: 10px;
    cursor: pointer;
    border: 2px solid transparent;
    object-fit: cover; /* 確保縮圖以相同的比例顯示 */
}

        .thumbnail-container img.active {
            border: 2px solid #e94e77;
        }

        .slide-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            z-index: 10;
        }

        .slide-btn-left {
            left: -30px;
        }

        .slide-btn-right {
            right: -30px;
        }

        .product-details {
            width: 35%;
            margin-top: 20px;
        }

        .product-header {
            margin: 0;
            padding: 0;
        }

        .product-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .product-title a {
            color: #0056b3;
            text-decoration: none;
        }

        .product-subtitle {
            font-size: 14px;
            color: #333;
            margin-top: 5px;
        }

        .rating {
            color: #ff9500;
            font-size: 14px;
            margin-top: 10px;
        }

        .product-price {
            margin-top: 20px;
            font-size: 28px;
            color: #e94e77;
        }

        .product-price hr {
            border: none;
            border-top: 1px solid #e0e0e0;
            margin: 10px 0;
        }

        .product-price .original-price {
            font-size: 18px;
            color: #999;
            text-decoration: line-through;
            margin-right: 10px;
        }

        .product-price .discount-price {
            font-size: 36px;
            color: #ff2d55;
            font-weight: bold;
        }

        .product-price .label {
            background-color: #ff2d55;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 16px;
            margin-left: 10px;
            vertical-align: middle;
        }

        .product-options {
            margin: 20px 0;
        }

        .product-options label {
            margin-right: 10px;
        }

        .product-actions {
            margin: 20px 0;
        }

        .btn {
            background-color: #e94e77;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-secondary {
            background-color: #f0f0f0;
            color: #333;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
        }

        .product-info {
            margin-top: 30px;
        }

        .product-info h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .product-description,
        .product-details-info {
            margin-top: 40px;
        }

        .product-description h3,
        .product-details-info h3 {
            font-size: 18px;
            margin-bottom: 15px;
        }

        .product-description p {
            margin-bottom: 10px;
            line-height: 1.6;
        }

        .product-details-info table {
            width: 100%;
            border-collapse: collapse;
        }

        .product-details-info table th,
        .product-details-info table td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        .navbar {
            background-color: white;
            padding: 15px 0;
            text-align: center;
            border-bottom: 1px solid #e0e0e0;
        }

        .navbar a {
            margin: 0 15px;
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }

        .breadcrumb {
            margin-top: 20px;
            color: #999;
        }

        .breadcrumb a {
            color: #333;
            text-decoration: none;
        }

        /* 分段式展示風格 */
        .section {
            margin-top: 40px;
            border-top: 2px solid #e0e0e0;
            padding-top: 20px;
        }

        .section h3 {
            margin-bottom: 20px;
            font-size: 22px;
        }

        /* 響應式設計 */
        @media (max-width: 768px) {
            .product-content {
                flex-direction: column;
                align-items: center;
            }

            .product-images {
                width: 100%;
                max-width: 100%;
            }

            .product-details {
                width: 100%;
                max-width: 100%;
                margin-top: 20px;
            }

            .product-title {
                text-align: center;
            }

            .product-price {
                text-align: center;
            }

            .btn,
            .btn-secondary {
                width: 100%;
                text-align: center;
                margin: 10px 0;
            }

            .thumbnail-container img {
                width: 80px;
                height: 80px;
            }

            .slide-btn-left {
                left: -20px;
            }

            .slide-btn-right {
                right: -20px;
            }
        }

        @media (max-width: 480px) {
            .thumbnail-container img {
                width: 60px;
                height: 60px;
            }

            .slide-btn-left {
                left: -10px;
            }

            .slide-btn-right {
                right: -10px;
            }

            .breadcrumb {
                font-size: 14px;
            }

            .navbar a {
                font-size: 14px;
                margin: 0 10px;
            }
        }
    </style>
</head>

<body>
    <!-- 導覽列 -->
    <div class="navbar">
        <a href="#">人力資源</a>
        <a href="#">工作</a>
        <a href="#">打工</a>
        <a href="#">公司</a>
        <a href="#">獵頭</a>
        <a href="#">學生</a>
        <a href="#">中高年</a>
        <a href="#">高階</a>
    </div>

    <div class="container">
        <!-- 麵包屑導航 -->
        <div class="breadcrumb">
            <a href="#">人力資源</a> > <a href="#">台灣</a> > <a href="#">高級人力</a> > 柯智勛
        </div>

        <div class="product-content">
            <!-- 產品圖片區域 -->
            <div class="product-images">
                <img src="assets/images/111.png" alt="Main Image" class="main-image" id="mainImage">

                <div class="thumbnail-wrapper">
                    <!-- 左滑動按鈕 -->
                    <button class="slide-btn slide-btn-left" id="slideLeft">&#10094;</button>
                    <div class="thumbnail-container" id="thumbnailContainer">
                        <img src="assets/images/111.png" alt="Thumbnail 1" class="thumbnail active"
                            onmouseover="changeImage(this)">
                        <img src="assets/images/222.png" alt="Thumbnail 2" class="thumbnail"
                            onmouseover="changeImage(this)">
                        <img src="assets/images/333.png" alt="Thumbnail 3" class="thumbnail"
                            onmouseover="changeImage(this)">
                        <img src="assets/images/444.png" alt="Thumbnail 3" class="thumbnail"
                            onmouseover="changeImage(this)">
                        <img src="assets/images/555.png" alt="Thumbnail 3" class="thumbnail"
                            onmouseover="changeImage(this)">
                    </div>
                    <!-- 右滑動按鈕 -->
                    <button class="slide-btn slide-btn-right" id="slideRight">&#10095;</button>
                </div>
            </div>

            <!-- 產品詳情區域 -->
            <div class="product-details">
                <!-- 產品標題與評分 -->
                <div class="product-header">
                    <p class="product-title">
                        <a href="#"><strong>柯智勛</strong></a>
                        適用於各行各業!願意學!肯努力!智力正常!人際交流正常!無不良嗜好!無犯罪紀錄!
                    </p>

                </div>
                <div class="rating">
                    ⭐⭐⭐⭐⭐ 5.0 (20)
                </div>

                <!-- 產品價格 -->
                <div class="product-price">
                    <hr>
                    <p class="original-price">市售價 月繳NT$45,000</p>
                    <p class="discount-price">促銷價 月繳NT$40,000</p>
                    <hr>
                </div>

                <!-- 產品規格選擇 -->
                <div class="product-options">
                    <label for="size"><strong>請選擇商品規格 :</strong></label>
                    <select id="size">
                        <option value="small">提供客製服務</option>
                    </select>
                </div>
                <div class="product-options">
                    <p><strong>商品長度 :</strong> 170cm(無灌水)</p>
                    <p><strong>商品重量 :</strong> 56kg</p>
                </div>

                <!-- 優惠活動資訊 -->
                <div class="product-info">
                    <h2>優惠活動</h2>
                    <p>7 天內下單附贈"一百萬"(<span style="font-size: 0.001em; opacity: 0.021;">毫</span>秒)加班時數</p>
                    <p>滿 NT$100,000 免運費</p>
                    <p><strong>配送方式 :</strong>全台灣</p>
                </div>

                <!-- 產品操作按鈕 -->
                <div class="product-actions">
                    <button class="btn">我要訂製</button>
                    <button class="btn-secondary">收藏商品</button>
                </div>
            </div>
        </div>

        <!-- 商品資訊 (經驗與技能) -->
        <div class="product-details-info section">
            <h3>商品資訊</h3>
            <table>
                <!-- 經驗與技能 -->
                <tr>
                    <th>學歷背景</th>
                    <td>
                        大學：建國科技大學 - 遊戲與產品設計系<i class="fas fa-graduation-cap">(畢業)。</i><br>
                        高職：致用高中 - 資訊科<i class="fas fa-graduation-cap">(畢業)。</i>
                    </td>
                </tr>
                <tr>
                    <th>專長技術</th>
                    <td>後端開發：擅長使用 Laravel 進行後端開發，與使用AWS-EC2架設網站(此網站就是)。<br>
                        資料庫：MySQL資料表規劃。<br>
                        作品：Laravel&MySQL 資料庫點餐系統
                        (包含
                        <a href="https://github.com/s9231158/order/tree/User" target="_blank">GitHub</a>、
                        <a href="https://alike-roadway-560.notion.site/new-96395ae9a5754e8fbc0d1af61d9f040d?pvs=4"
                            target="_blank">資料表</a>、
                        <a href="https://alike-roadway-560.notion.site/Order-API-768148dc97f448c3857f8d0bfcb46186?pvs=4"
                            target="_blank">API 文件說明</a>)。
                    </td>
                </tr>
                <tr>
                    <th>證照</th>
                    <td>金融市場常識與職業道德證照、人身保險業務員證照、普通小型車駕照、普通重型機車駕照、電腦硬體裝修丙級。</td>
                </tr>
                <tr>
                    <th>社團經歷</th>
                    <td>大學系學會 - 副活動長。<br>
                        參加過新一代設計展。<br>
                        校內熱音社樂團表演。
                    </td>
                </tr>
                <tr>
                    <th>商品材質</th>
                    <td>尋求穩定的心、刻苦好學的骨</td>
                </tr>
                <tr>
                    <th>製造方式</th>
                    <td>柯氏與王氏股份有愛公司共同製造</td>
                </tr>
                <tr>
                    <th>商品產地</th>
                    <td>台中</td>
                </tr>
                <tr>
                    <th>商品規格</th>
                    <td>提供客製服務</td>
                </tr>
                <tr>
                    <th>庫存</th>
                    <td>全台僅此一件</td>
                </tr>
                <tr>
                    <th>商品排行</th>
                    <td>No.1 - 台灣 | No.2 - 高級人力 | No.4柯智勛</td>
                </tr>
                <tr>
                    <th>商品熱度</th>
                    <td>被欣賞 7749 次</td>
                </tr>
            </table>
        </div>
        
        <!-- 商品介紹 -->
        <div class="product-description section">
            <h3>商品介紹</h3>
            <p>大家好，我是智勛，今年27歲。我一直在尋找自己理想的生活方式，並且保持著對學習的熱情。從之前的食品製作、餐飲服務到動物照護、房務管理，我不僅學會了如何與不同年齡層的人溝通，也在工作中不斷探索遵循規矩與創新思考的平衡。

目前，我希望能找到一份穩定的工作，並且願意在職前或在職期間，主動學習所需的技能和考取相關證照。我非常不願意因為自己的能力不足而拖累他人，這也是我保持對學習熱誠的原因之一。之前我在資策會學習了全端開發，並透過自學完成了一個點餐系統的後端開發。此外，我還負責了這個網站的架設，使用了AWS EC2進行部署。

除了技術之外，在校期間我還參與過電子競技比賽，這段經歷讓我深刻體會到團隊協作和在壓力下完成任務的重要性。無論是需要遵循傳統的工作，還是富有創意的專案，我都會全力以赴。

我期待能夠找到一個適合自己的職位，在未來的工作中不斷成長，持續進步。</p>
        </div>
    </div>

    <script>
        let currentImageIndex = 0;
        const thumbnails = document.getElementsByClassName('thumbnail');
        const mainImage = document.getElementById('mainImage');
        let slideInterval;

        function changeImage(element) {
            // 取消所有縮圖的激活狀態
            for (let i = 0; i < thumbnails.length; i++) {
                thumbnails[i].classList.remove('active');
            }

            // 設定選中縮圖為激活狀態
            element.classList.add('active');

            // 更換主圖片
            mainImage.src = element.src;

            // 更新当前图片索引
            currentImageIndex = Array.from(thumbnails).indexOf(element);
        }

        function slideLeft() {
            var container = document.getElementById('thumbnailContainer');
            container.scrollLeft -= 100; // 調整滾動量以控制滑動速度
        }

        function slideRight() {
            var container = document.getElementById('thumbnailContainer');
            container.scrollLeft += 100; // 調整滾動量以控制滑動速度
        }

        function startSlideShow() {
            slideInterval = setInterval(() => {
                currentImageIndex = (currentImageIndex + 1) % thumbnails.length;
                changeImage(thumbnails[currentImageIndex]);
            }, 200); // 每0.3秒切换图片
        }

        function stopSlideShow() {
            clearInterval(slideInterval);
        }

        document.getElementById('thumbnailContainer').addEventListener('mouseenter', stopSlideShow);
        document.getElementById('thumbnailContainer').addEventListener('mouseleave', startSlideShow);

        // 开始幻灯片播放
        startSlideShow();
    </script>
</body>

</html>
