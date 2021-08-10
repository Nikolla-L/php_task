<?php
    include 'classes/newPost.php';
    include 'classes/traitHeader.php';

    //random texts
    $random_text1 = "ფერწერა (ფერით წერა) — სახვითი ხელოვნების დარგი. მხატვრული ნაწარმოები, რომელიც იქმნება რაიმე მაგარი საგნის ზედაპირზე საღებავებით. როგორც ხელოვნების სხვა დარგები, ფერწერა იდეოლოგიური და შემეცნებით სფეროს ემსახურება, ქმნის საგნობრივ-ესთეტიკურ ღირებულებას. იგი ადამიანის შრომის ერთ-ერთი მაღალგანვითარებული ფორმაა. ფერწერა ასახავს ამა თუ იმ იდეოლოგიურ კონცეფციას, ზემოქმედებას ახდენს ადამიანის გრძნობებსა და აზრებზე, აიძულებს მას განიცადოს მხატვრის მიერ ასახული სინამდვილე. მრავალი ფერწერული ნაწარმოები დოკუმენტურ-საინფორმაციო ღირებულებისაა. ფერწერა იყოფა შემდეგ ქვესახეებად: მონუმენტური ფერწერა, კედლის ფერწერა ანუ ფრესკა, დეკორატიული ფერწერა(დიზაინი), დაზგური ფერწერა და მინიატურული ფერწერა. გამოსასახი საგნებისა და მოვლენების მიხედვით ფერწერა იყოფა ჟანრებად, რომელთაგან მთავარია: ისტორიული ფერწერა, ყოფითი ფერწერა, ბატალური ფერწერა, ანიმალისტური ფერწერა, ნატურმორტი, პეიზაჟი და პორტრეტი.";
    $random_text2 = "ბლოგოსფერო არის ყველა არსებული ბლოგის კრებითი სახელი. რახან ყველა ბლოგი არსებობს ინტერნეტ სივრცეში, ისინი შესაძლოა წარმოვიდგინოთ, როგორც ერთმანეთთან დაკავშირებული სისტემა ან სოციალური ქსელი. „ბლოგოსფეროში წარმართული“ განხილვები მედიის მიერ მიჩნეულია, როგორც საზოგადოებრივი აზრი. ლოკალური ბლოგების კრებულს ხანდახანს ეძახიან Bloghood-ს. ბლოგძიების სისტემებით ეძებენ ბლოგების შიგთავსს. ასეთი სისტემებია: GoogleBlogSearch, Bloglines, BlogScope, და ტექნორატი, რომელიც ყველაზე პოპულარულია ბლოგძიების სისტემებს შორის, უზრუნველყოფს უახლესი ინფორმაციის მიწოდებას, პოპულარული ძიებების და იარლიყების (tags) შესახებ, რომლებიც კატეგორიებად ყოფენ პოსტებს. კვლევითი საზოგადოება მუშაობს ძებნის ახალი გზებს გამოგონებაზე, keyword-ების გვერდის ავლით, რათა უფრო მარტივი გახდეს ბლოგოსფეროში წარმოდგენილი უზარმაზარი ინფომაციის ზღვაში ნავიგაცია. ერთი ასეთი პროექტია BlogScope. არსებობს რამდენიმე ონლაინ გაერთიანება რომლებიც აკავშირებს ხალხს ბლოგებთან და ბლოგერებს სხვა ბლოგერებთან. ასეთებია BlogCatalog და MyBlogLog. ბლოგებზე ხშირია რეკლამის დამატების შესაძლებლობის არსებობა, ან ფინანსური მოგების მიღების მიზნით და ან ბლოგერის ინტერესების გამო. ბლოგების პუპულარობამ განაპირობა „მცდარი (მატყუარა) ბლოგების“ შექმნა, რომლებსაც კომპანიები იყენებენ მარკეტინგული ღონისძიებების გასატარებლად.";
    $random_text3 = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, aliquid repudiandae ea molestiae culpa officia! Totam iusto, mollitia maiores tempora rerum ut ex impedit aliquam quos perferendis inventore rem molestias culpa quas corrupti quisquam velit placeat doloribus nobis? Odit quos maxime eius provident doloribus distinctio quo earum rerum, natus tempora repellat, possimus rem nobis quidem ullam dolorem aut voluptatibus velit labore ipsum. Suscipit dolorem ducimus facilis quasi? Non dolore atque cum iste ipsum repudiandae excepturi maiores recusandae, amet minus, qui beatae consectetur omnis consequuntur quos quibusdam molestias velit quasi aspernatur commodi dolor officiis, tempora in! Impedit, accusamus! Quam cupiditate enim expedita vel similique quis ex a excepturi accusamus veniam, fugit in debitis magni reiciendis ullam. Recusandae vel quo reiciendis, praesentium enim ipsa veritatis aut doloribus corrupti facilis maxime magni, omnis placeat eaque? Minus, sapiente at laboriosam, perspiciatis rerum earum expedita nulla illum culpa quae corrupti provident dicta eveniet harum. Facere, corrupti architecto quaerat, ullam repudiandae similique explicabo dicta dignissimos at magnam unde iste suscipit reprehenderit tempore dolore, consequuntur nesciunt! Et voluptatum aut veritatis beatae eveniet eius neque, error eaque impedit, praesentium possimus autem illum! Explicabo saepe, magni qui reiciendis, voluptatum labore tenetur consequatur consequuntur odit voluptate incidunt sequi fugit ipsam sit nobis, impedit ea libero at tempore. Aspernatur non atque aut eligendi, officiis quo, itaque nam dolores quas adipisci impedit iusto id repellat libero perferendis corrupti beatae. Quod laudantium aut ipsa recusandae ipsam doloremque beatae accusantium veniam provident repudiandae minus facilis laboriosam ea id, quibusdam eligendi error! Repellendus repudiandae omnis animi, veritatis nobis exercitationem nisi numquam veniam laboriosam dolores corporis deleniti vero pariatur consectetur alias autem ipsa? Culpa pariatur animi unde necessitatibus adipisci doloremque quidem nihil assumenda cupiditate. Saepe maiores sint non aspernatur omnis molestias, libero iusto quia. Delectus quos exercitationem atque illo sequi animi perferendis ipsa eveniet eos earum. Aut ullam sint eius consequuntur totam dicta illo, doloribus, sapiente aliquid sequi, quam voluptatem rem ipsam assumenda velit natus ipsum officiis a qui suscipit. Dolorum, et. Fugit eveniet aspernatur iure delectus omnis consequuntur explicabo voluptate nostrum saepe quae voluptatibus quibusdam, laudantium eligendi amet praesentium ad repudiandae neque consequatur rerum similique facilis dolorem. Voluptatibus dignissimos nisi velit, nemo rem veniam impedit totam excepturi, provident nesciunt fugiat possimus ratione quae voluptate optio veritatis aspernatur non voluptas beatae assumenda distinctio accusantium ipsum eligendi! At voluptatibus fuga ad asperiores voluptates nostrum? Expedita, cupiditate. Quaerat fugit accusantium sint rem quod cum aperiam, dolores ea delectus!";

    //თრეითის შვილობილი კლასით ჰედერის შექმნა და კონსტანტას (ლოგოს) გამოძახება
    $header = new FullHeader;
    $header->setLogo();

    //პოსტების ობიექტების შექმნა Post-ის შვილობილი კლასიდან
    $postcard1 = new FullPostCard('image', 'ფერწერა', $random_text1, 'რაფაელი');
    $postcard2 = new FullPostCard('img2', 'title', $random_text2, "ნიკო");
    $postcard3 = new FullPostCard('img3', 'Lorem Ipsum Racxa', 'text', "ლეონარდო დიკაპრიო");
    
    //მეთოდებით მნიშვნელობების მინიჭება (სადემონსტრაციოდ)
    $postcard1->setImage('img1');
    $postcard1->setDate('22 იანვარი');
    $postcard2->setTitle('რა არის ბლოგსფერო?');
    $postcard3->setText($random_text3);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blog Posts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .card-img-top {
            max-height: 600px!important;
            width: 100%!important;
            object-fit: contain!important;
        }
    </style>
</head>
<body>
    <?php $header->drawHeader(); ?>
    <div class="container-fluid" style="background-color: rgba(0, 0, 0, 0.2)">
        <div class="container p-5 d-flex flex-column align-items-center bg-white">
            <?php 
                $postcard1->drawPostCard(); 
                $postcard2->drawPostCard();
                $postcard3->drawPostCard();
            ?>
        </div>
    </div>
</body>
</html>