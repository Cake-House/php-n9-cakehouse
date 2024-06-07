<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán Giỏ Hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            font-size: 24px;
            margin: 10px 0;
        }
        .steps {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .step {
            text-align: center;
            position: relative;
            flex: 1;
        }
        .step::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #ccc;
            z-index: 1;
        }
        .step.active::before {
            background-color: #000;
        }
        .step.active .step-number {
            color: #fff;
        }
        .step-number {
            position: relative;
            z-index: 2;
            background-color: #000;
            color: #fff;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: inline-block;
            line-height: 20px;
            text-align: center;
            margin-bottom: 5px;
        }
        .step-title {
            font-size: 14px;
        }
        .step-line {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            height: 2px;
            background-color: #ccc;
            z-index: 0;
        }
        .step:first-child .step-line {
            left: 50%;
            width: 50%;
        }
        .step:last-child .step-line {
            left: 0;
            width: 50%;
        }
        .content {
            display: flex;
            justify-content: space-between;
        }
        .content .section {
            width: 32%;
            background-color: #f9f9f9;
            padding: 20px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .section h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .section label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .section input, .section select, .section textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .section .radio-group {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .section .radio-group input {
            margin-right: 5px;
        }
        .section .total {
            font-size: 18px;
            font-weight: bold;
            color: #e74c3c;
            text-align: right;
        }
        .section .btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #e74c3c;
            color: #fff;
            text-align: center;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="row-fluid bolasSteps">
  <div class="span3">
    <div class="flechaSteps"></div>
  </div>
  <div class="span3 checkoutTitle">
    <div class="flechaSteps"></div>
  </div>
  <div class="span3 success">
    <div class="flechaSteps paso4"></div>
  </div>
</div>
        <div class="content">
            <div class="section">
                <h2>1 Thông tin hóa đơn</h2>
                <label for="name">Tên *</label>
                <input type="text" id="name" name="name">
                <label for="address">Địa chỉ</label>
                <input type="text" id="address" name="address">
                <label for="phone">Số điện thoại *</label>
                <input type="text" id="phone" name="phone">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
                <label for="note">Ghi chú</label>
                <textarea id="note" name="note" rows="4"></textarea>
            </div>
            <div class="section">
                <h2>2 Phương thức thanh toán</h2>
                <p>Chuyển khoản ngân hàng</p>
                <p>Chuyển khoản sau khi có nhân viên gọi xác nhận và hướng dẫn thủ tục chuyển khoản</p>
            </div>
            <div class="section">
                <h2>3 Thông tin giỏ hàng</h2>
                <p>Sản phẩm: Mẫu váy mùa hè - 16 cm x 1</p>
                <p>Tạm tính: 290.000 đ</p>
                <div class="radio-group">
                    <input type="radio" id="cod" name="payment" value="cod">
                    <label for="cod">Thanh toán tại cửa hàng</label>
                </div>
                <p>Giao hàng: 30.000 đ</p>
                <p class="total">290.000 đ</p>
                <button class="btn">ĐẶT HÀNG NGAY</button>
            </div>
        </div>
    </div>
</body>
</html>