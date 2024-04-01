@extends('frontend.components.template')
@section('content')
    <div id="contact">
        <div class="container">
            <h1><span style="color : var(--warna-01);">SHARE YOUR PROJECT</span> WITH US</h1>
            <div class="form-field">
                <div class="row">
                    <div class="col-md-6 form">
                        @if (Session::has('berhasil'))
                            <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
                                <i class="fas fa-check"></i>
                                Your message have been sended.
                                <a href="">

                                </a>
                                <button class="btn-close"
                                    onclick="window.location.href='<?= url('contact/destroySession') ?>';"></button>
                            </div>
                        @endif
                        <form action="<?= url('contact/tambahInbox') ?>" method="post"
                            class="w-100 d-flex justify-content-center">
                            <table>
                                <tr>
                                    <td class="label">
                                        <span>Name</span><span class="text-danger">*</span>
                                    </td>
                                    <td class="w-100">
                                        <input class="input" type="text" placeholder="Your Name" name="name"
                                            required>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label">
                                        <span>Email</span><span class="text-danger">*</span>
                                    </td>
                                    <td>
                                        <input class="input" type="text" placeholder="example@email.com" name="email"
                                            required>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label">
                                        <span>Subject</span><span class="text-danger">*</span>
                                    </td>
                                    <td>
                                        <input class="input" type="text" placeholder="Message Title" name="subject"
                                            required>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label">
                                        <span>Message</span><span class="text-danger">*</span>
                                    </td>
                                    <td>
                                        <textarea class="input" rows="6" placeholder="Your Message" name="message" required></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="text-end">
                                            <button type="submit" class="send">send</button>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <div class="col-md-6 talk-with-us">
                        <span>Talk with us at</span>
                        <a href="https://www.linkedin.com/company/debindo/" target="blank">
                            <button class="linkedin">LinkedIn</button>
                        </a>
                        <a href="https://www.facebook.com/DebindoNetwork/" target="blank">
                            <button class="facebook">Facebook</button>
                        </a>
                        <a href="https://www.instagram.com/debindonetwork/" target="blank">
                            <button class="instagram">Instagram</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
