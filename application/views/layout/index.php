<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <?php foreach ($this->db->query("SELECT * FROM tbl_navigation WHERE status = 1")->result() as $n) { ?>
        <?php if ($this->uri->segment(1) == $n->slug) {
            $segment1 = $n->metaTitle . ' | ' . $n->title;
            $metaKey = $n->metaKeywords;
            $metaDes = $n->metaDescription;
        } ?>
    <?php } ?>

    <?php
    if ($this->uri->segment(1) == 'prices') {
        $segment1 = $website->metaTitle . ' | Price';
        $metaKey = $website->metaKeywords;
        $metaDes = $website->metaDescription;
    } else if ($this->uri->segment(1) == 'tracking') {
        $segment1 = $website->metaTitle . ' | Tracking';
        $metaKey = $website->metaKeywords;
        $metaDes = $website->metaDescription;
    } else if ($this->uri->segment(1) == 'getbranch') {
        $segment1 = $website->metaTitle . ' | Get Branch';
        $metaKey = $website->metaKeywords;
        $metaDes = $website->metaDescription;
    }
    ?>

    <?php if ($this->uri->segment(2) != 'baca') { ?>
        <title><?= $segment1; ?> </title>
        <meta name="keywords" content="<?= $metaKey; ?>">
        <meta name="description" content="<?= $metaDes; ?>">
    <?php } ?>

    <?php
    if ($this->uri->segment(2) == 'baca') {
        $meta = $this->db->get_where('tbl_posts', array('slug' => $this->uri->segment(3)))->row();
        echo '<title>' . $website->metaTitle . ' | ' . strtoupper($meta->Title) . '</title>
        <meta name="keywords" content="' . $meta->slug . $website->metaKeywords . '">
        <meta name="description" content="' . $meta->en_content . $website->metaDescription . '">
        <meta property="og:title" content="' . $meta->Title . '" />
        <meta property="og:description" content="' . $meta->en_content . $website->metaDescription . '" />
        <meta property="og:image" content="https://newant.digitalindo.co.id/upload/berita/' . $meta->image . '" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="300" />
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="' . base_url() . 'Berita/baca/' . $meta->slug . '">
        <meta name="twitter:title" content="' . $meta->Title . '">
        <meta name="twitter:description" content="' . $meta->en_content . $website->metaDescription . '">
        <meta name="twitter:image" content="https://newant.digitalindo.co.id/upload/berita/' . $meta->image . '">';
    }
    ?>
    <!-- Favicon -->
    <link href="<?= base_url(); ?>assets/imagenew/logo_url.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Select2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/glightbox/css/glightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/responsive.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/swiper.css" rel="stylesheet">
    <script>
        window.jQuery || document.write('<script src="<?= base_url(); ?>assets/js/jquery-1.11.0.min.js"><\/script>');
    </script>

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <div class="container-xxl bg-white p-0">


        <?php if ($header) echo $header; ?>
        <?php //if($left) echo $left ;
        ?>
        <?php if ($middle) echo $middle; ?>
        <?php if ($footer) echo $footer; ?>


</body>

</html>