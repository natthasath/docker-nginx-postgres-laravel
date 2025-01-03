@extends('layouts.guest')

@section('content')
<div class="container">
    <div class="row justify-content-center mh-100" style="min-height: 750px; align-items: center;">
        <div class="col-md-8">
            <div class="card border-light">
                <div class="card-header border-light bg-danger">
                    <a style="font-size: 20px;"><center>เงื่อนไขและข้อตกลงในการยื่นขอรับการพิจารณารับรองจริยธรรมการวิจัยในมนุษย์</center></a>
                </div>
                <div class="card-body border-light" style="background-color: #FCF9F9;">
                    <div class="row p-5 ">
                        <p class="text-black">
                            Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham
                        </p>
                    </div>

                    <form method="POST" action="{{ route('check_privacy') }}">
                        @csrf

                        <div class="row mb-3 justify-content-center">
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="accept" id="accept" {{ old('accept') ? 'checked' : '' }} >

                                    <label class="form-check-label" for="accept">
                                        {{ __(' ข้าพเจ้า ได้อ่านและยอมรับเงื่อนไขตามที่ระบุ...') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-sm-4">
                                <center>
                                    <button class="btn btn-block btn-primary" type="submit">
                                        {{ __('ยืนยัน') }}
                                    </button>
                                </center>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
