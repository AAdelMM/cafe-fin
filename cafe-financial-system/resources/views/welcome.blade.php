<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>نظام الكافيه</title>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* خط عربي عصري */
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap');
        body {
            font-family: 'Cairo', sans-serif;
        }

        /* تدرج متحرك للأزرار */
        .btn-gradient {
            background: linear-gradient(270deg, #f59e0b, #d97706, #f59e0b);
            background-size: 600% 600%;
            animation: gradientAnimation 8s ease infinite;
        }
        @keyframes gradientAnimation {
            0% {background-position: 0% 50%;}
            50% {background-position: 100% 50%;}
            100% {background-position: 0% 50%;}
        }
        /* تأثير الظل المتحرك عند المرور */
        .btn-gradient:hover {
            box-shadow: 0 8px 20px rgba(245, 158, 11, 0.6);
            transform: translateY(-3px);
        }
        .btn-gradient:active {
            transform: translateY(0);
            box-shadow: 0 4px 10px rgba(245, 158, 11, 0.4);
        }

        /* زر ثانوي مع تأثير متحرك */
        .btn-outline {
            position: relative;
            overflow: hidden;
            border: 2px solid #d97706;
            color: #d97706;
            transition: color 0.3s ease;
        }
        .btn-outline::before {
            content: "";
            position: absolute;
            top: 0; left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(270deg, #f59e0b, #d97706, #f59e0b);
            background-size: 600% 600%;
            animation: gradientAnimation 8s ease infinite;
            transition: left 0.3s ease;
            z-index: -1;
        }
        .btn-outline:hover {
            color: white;
        }
        .btn-outline:hover::before {
            left: 0;
        }
        .btn-outline:active {
            transform: scale(0.97);
        }

        /* تأثيرات الروابط في الهيدر */
        nav a {
            position: relative;
            font-weight: 500;
            color: #b45309; /* amber-700 */
            transition: color 0.3s ease;
        }
        nav a::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #d97706; /* amber-600 */
            transition: width 0.3s ease;
        }
        nav a:hover {
            color: #d97706;
        }
        nav a:hover::after {
            width: 100%;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-amber-50 to-amber-100 text-gray-800">

    <!-- الهيدر -->
    <header class="w-full py-5 px-10 flex justify-between items-center bg-white shadow-xl fixed top-0 left-0 z-50 backdrop-blur-md bg-opacity-90">
        <h1 class="text-2xl font-extrabold text-amber-700 tracking-wide select-none">☕ نظام الكافيه</h1>
        <nav class="flex gap-10">
            <a href="#features">المميزات</a>
            <a href="#about">عن النظام</a>
            <a href="#contact">تواصل معنا</a>
        </nav>
    </header>

    <!-- البطل (Hero Section) -->
    <section class="relative flex flex-col items-center justify-center text-center h-screen bg-[url('https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=1600&q=80')] bg-cover bg-center">
        <div class="absolute inset-0 bg-gradient-to-br from-black/60 via-amber-900/40 to-black/60"></div>
        <div class="relative z-20 max-w-3xl px-6">
            <h2 class="text-5xl md:text-6xl font-extrabold text-white mb-6 leading-tight drop-shadow-lg">
                أهلاً بك في <span class="text-amber-400">نظام الكافيه</span>
            </h2>
            <p class="text-xl md:text-2xl text-amber-100 mb-10 drop-shadow-md">
                نظام ذكي يساعدك على إدارة المبيعات والمصروفات والفواتير بسهولة واحترافية.
            </p>
            <div class="flex justify-center gap-8 flex-wrap">
                <a href="{{ url('/admin') }}" class="btn-gradient px-8 py-3 rounded-3xl font-extrabold text-white text-lg shadow-lg transition-transform duration-300 select-none">
                    تسجيل الدخول
                </a>
                <a href="{{ url('/admin') }}" class="btn-outline px-8 py-3 rounded-3xl font-extrabold text-lg shadow-md transition-transform duration-300 select-none relative overflow-hidden">
                    إنشاء حساب
                </a>
            </div>
        </div>
    </section>

    <!-- المميزات -->
    <section id="features" class="py-24 px-8 md:px-20 bg-gradient-to-tr from-amber-50 to-amber-100 text-center">
        <h3 class="text-4xl font-extrabold text-amber-700 mb-16 tracking-wide">مميزات النظام</h3>
        <div class="grid md:grid-cols-3 gap-12 max-w-6xl mx-auto">
            <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-shadow duration-300 cursor-pointer">
                <div class="text-5xl mb-5 text-amber-500 drop-shadow-md">📊</div>
                <h4 class="text-2xl font-bold mb-3 text-amber-700">إدارة مالية</h4>
                <p class="text-gray-700 leading-relaxed">
                    تتبع المصروفات والإيرادات والفواتير بسهولة ودقة مع تقارير مفصلة.
                </p>
            </div>
            <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-shadow duration-300 cursor-pointer">
                <div class="text-5xl mb-5 text-amber-500 drop-shadow-md">👥</div>
                <h4 class="text-2xl font-bold mb-3 text-amber-700">إدارة العملاء</h4>
                <p class="text-gray-700 leading-relaxed">
                    سجل العملاء واشتراكاتهم وابقَ على تواصل دائم معهم بواجهة سهلة الاستخدام.
                </p>
            </div>
            <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-shadow duration-300 cursor-pointer">
                <div class="text-5xl mb-5 text-amber-500 drop-shadow-md">📱</div>
                <h4 class="text-2xl font-bold mb-3 text-amber-700">واجهة عصرية</h4>
                <p class="text-gray-700 leading-relaxed">
                    تصميم متجاوب يعمل على جميع الأجهزة مع تجربة مستخدم سلسة وعصرية.
                </p>
            </div>
        </div>
    </section>

    <!-- عن النظام -->
    <section id="about" class="py-24 px-8 md:px-20 bg-gradient-to-r from-amber-100 to-amber-50 text-center">
        <h3 class="text-4xl font-extrabold text-amber-700 mb-10 tracking-wide">عن النظام</h3>
        <p class="max-w-3xl mx-auto text-gray-700 text-lg md:text-xl leading-relaxed">
            نظام الكافيه هو الحل الأمثل لإدارة أعمال المقاهي والمطاعم. 
            تم تصميمه ليمنحك التحكم الكامل في المبيعات والمصروفات والفواتير 
            مع تقارير مفصلة تساعدك على اتخاذ قرارات أفضل بسهولة واحترافية.
        </p>
    </section>

    <!-- تواصل معنا -->
    <section id="contact" class="py-24 px-8 md:px-20 bg-white text-center">
        <h3 class="text-4xl font-extrabold text-amber-700 mb-10 tracking-wide">تواصل معنا</h3>
        <p class="mb-8 text-lg md:text-xl text-gray-700">للاستفسار والمساعدة، يمكنك التواصل عبر البريد الإلكتروني:</p>
        <a href="mailto:info@cafe-system.com" class="inline-block text-amber-600 font-semibold text-xl hover:underline transition">
            info@cafe-system.com
        </a>
    </section>

    <!-- الفوتر -->
    <footer class="py-8 text-center bg-amber-700 text-white font-semibold tracking-wide select-none">
        © {{ date('Y') }} جميع الحقوق محفوظة - نظام الكافيه
    </footer>

</body>
</html>
