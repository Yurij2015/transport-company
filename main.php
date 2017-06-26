<?php include 'includes/session.php'; ?>
<?php include 'includes/db_connect.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php $layout_context = "public"; ?>
<?php include 'includes/header.php'; ?>
<?php find_selected_page(true); ?>
    <!-- welcome -->
    <div class="welcome">
        <div class="container">
            <div class="news-grid">
                <div class="col-md-12 blog-left">
                    <div class="blog-left-grid">
                        <h2><?php echo htmlentities($current_page["menu_name"], ENT_QUOTES, "UTF-8"); ?></h2>
                        <?php if ($current_page) { ?>
                            <?php echo($current_page["content"]); ?>
                        <?php } else { ?>
                            <h3>Информационно-справочная система!</h3>
                            <img src="images/web.jpg" class="center-block img-responsive img-thumbnail">
                            <hr>
                            <p class="text-info">
                                Информационная система IS-Companion предназначенная для хранения, поиска и обработки информации, и соответствующие организационные ресурсы (человеческие, технические, финансовые и т. д.), которые обеспечивают и распространяют информацию.</p><p class="text-info">

                                Информационная система предназначена для своевременного обеспечения сотудников компании информацией, то есть для удовлетворения конкретных информационных потребностей в рамках выполняемых функций, при этом результатом функционирования информационных систем является информационная продукция — документы, информационные массивы, базы данных и информационные услуги</p>
                            <hr>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //welcome -->
<?php include 'includes/footer.php'; ?>