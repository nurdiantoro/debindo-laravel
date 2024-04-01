@extends('frontend.components.template')
@section('content')
    <div id="career">
        <div class="header">
            <h1>COME WORK <span style="color:var(--warna-02);">WITH US</span></h1>
        </div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <?php foreach ($careers as $career): ?>
                <div class="col-md-3">
                    <div class="card-career">
                        <span><?= $career->jabatan ?></span>
                        <p><?= $career->deskripsi ?></p>
                        <p>Requirement :</p>
                        <ul>
                            <?php
                            // SELECT id requirement => id career
                            foreach ($careerRequirement as $requirement) {
                                switch ($requirement->id_career) {
                                    case $career->id:
                            ?>
                            <li><?= $requirement->requirement ?></li>
                            <?php break;}}?>
                        </ul>
                        <div class="w-100 text-center">
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
            <div class="card-career no-position">
                Don't see a suitable Position? Contact us, and tell us about your value. Our team will be happy to contact
                you. Click button below and insert your Position as Subject.
                <div class="mt-3">
                    <a href="mailto:career.debindo@gmail.com">
                        <button class="btn tell-us">Tell Us</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
