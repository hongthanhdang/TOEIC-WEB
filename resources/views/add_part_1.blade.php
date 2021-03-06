@extends('layouts.master')
@section('title','add part 1')
@section('navbar')
    @parent
@endsection

@section('content')
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="body row">
        <div class="row">
            <div class="col-12 time-detail">
                <button class="timer-btn">Timer</button>
                <span class="clock">00:00:00</span>
            </div>
        </div>

        <div class="content-container col-12 col-sm-11 col-md-10 col-lg-9 col-xl-8">
            <div class="header-content">
                <div>Practic part 1 (10 sentences), *(Admin phải upload tất cả các file và chọn đáp án đúng cho từng câu)</div>
            </div>
            <div class="content">
                <div class="p1">
                    <!-- audio -->
                    <div class="audio">
                        <span>Input audio here</span>
                        <input type="file" name="#" accept="audio/*">
                    </div>
                    <hr>

                    <!-- intro img-->
                    <div class="intro">
                        <span>Input image intro here</span>
                        <input type="file" name="#" accept="image/*">
                    </div>
                    <hr>
                    <!-- list cau hoi -->
                    <div class="list-cau">
                        <!-- cau1 -->
                        <div class="ques">
                            <div class="no-ques">
                                Câu 1:
                            </div>
                            <div class="div-img">
                                <span>Input image intro here</span>
                                <input type="file" name="#" accept="image/*">
                            </div>
                            <div class="tick col-12 col-sm-10 row">
                                <label class="col-3"><input type="radio" name="choise">A</label>
                                <label class="col-3"><input type="radio" name="choise">B</label>
                                <label class="col-3"><input type="radio" name="choise">C</label>
                                <label class="col-3"><input type="radio" name="choise">D</label>
                            </div>
                        </div>
                        <!-- cau2 -->
                        <div class="ques">
                            <div class="no-ques">
                                Câu 2
                            </div>
                            <div class="div-img">
                                <span>Input image intro here</span>
                                <input type="file" name="#" accept="image/*">
                            </div>
                            <div class="tick col-12 col-sm-10 row">
                                <label class="col-3"><input type="radio" name="choise">A</label>
                                <label class="col-3"><input type="radio" name="choise">B</label>
                                <label class="col-3"><input type="radio" name="choise">C</label>
                                <label class="col-3"><input type="radio" name="choise">D</label>
                            </div>
                        </div>
                        <!-- cau3 -->
                        <div class="ques">
                            <div class="no-ques">
                                Câu 3
                            </div>
                            <div class="div-img">
                                <span>Input image intro here</span>
                                <input type="file" name="#" accept="image/*">
                            </div>
                            <div class="tick col-12 col-sm-10 row">
                                <label class="col-3"><input type="radio" name="choise">A</label>
                                <label class="col-3"><input type="radio" name="choise">B</label>
                                <label class="col-3"><input type="radio" name="choise">C</label>
                                <label class="col-3"><input type="radio" name="choise">D</label>
                            </div>
                        </div>
                        <!-- cau4 -->
                        <div class="ques">
                            <div class="no-ques">
                                Câu 4
                            </div>
                            <div class="div-img">
                                <span>Input image intro here</span>
                                <input type="file" name="#" accept="image/*">
                            </div>
                            <div class="tick col-12 col-sm-10 row">
                                <label class="col-3"><input type="radio" name="choise">A</label>
                                <label class="col-3"><input type="radio" name="choise">B</label>
                                <label class="col-3"><input type="radio" name="choise">C</label>
                                <label class="col-3"><input type="radio" name="choise">D</label>
                            </div>
                        </div>
                        <!-- cau5 -->
                        <div class="ques">
                            <div class="no-ques">
                                Câu 5
                            </div>
                            <div class="div-img">
                                <span>Input image intro here</span>
                                <input type="file" name="#" accept="image/*">
                            </div>
                            <div class="tick col-12 col-sm-10 row">
                                <label class="col-3"><input type="radio" name="choise">A</label>
                                <label class="col-3"><input type="radio" name="choise">B</label>
                                <label class="col-3"><input type="radio" name="choise">C</label>
                                <label class="col-3"><input type="radio" name="choise">D</label>
                            </div>
                        </div>
                        <!-- cau6 -->
                        <div class="ques">
                            <div class="no-ques">
                                Câu 6
                            </div>
                            <div class="div-img">
                                <span>Input image intro here</span>
                                <input type="file" name="#" accept="image/*">
                            </div>
                            <div class="tick col-12 col-sm-10 row">
                                <label class="col-3"><input type="radio" name="choise">A</label>
                                <label class="col-3"><input type="radio" name="choise">B</label>
                                <label class="col-3"><input type="radio" name="choise">C</label>
                                <label class="col-3"><input type="radio" name="choise">D</label>
                            </div>
                        </div>
                        <!-- cau7 -->
                        <div class="ques">
                            <div class="no-ques">
                                Câu 7
                            </div>
                            <div class="div-img">
                                <span>Input image intro here</span>
                                <input type="file" name="#" accept="image/*">
                            </div>
                            <div class="tick col-12 col-sm-10 row">
                                <label class="col-3"><input type="radio" name="choise">A</label>
                                <label class="col-3"><input type="radio" name="choise">B</label>
                                <label class="col-3"><input type="radio" name="choise">C</label>
                                <label class="col-3"><input type="radio" name="choise">D</label>
                            </div>
                        </div>
                        <!-- cau8 -->
                        <div class="ques">
                            <div class="no-ques">
                                Câu 8
                            </div>
                            <div class="div-img">
                                <span>Input image intro here</span>
                                <input type="file" name="#" accept="image/*">
                            </div>
                            <div class="tick col-12 col-sm-10 row">
                                <label class="col-3"><input type="radio" name="choise">A</label>
                                <label class="col-3"><input type="radio" name="choise">B</label>
                                <label class="col-3"><input type="radio" name="choise">C</label>
                                <label class="col-3"><input type="radio" name="choise">D</label>
                            </div>
                        </div>
                        <!-- cau9 -->
                        <div class="ques">
                            <div class="no-ques">
                                Câu 9
                            </div>
                            <div class="div-img">
                                <span>Input image intro here</span>
                                <input type="file" name="#" accept="image/*">
                            </div>
                            <div class="tick col-12 col-sm-10 row">
                                <label class="col-3"><input type="radio" name="choise">A</label>
                                <label class="col-3"><input type="radio" name="choise">B</label>
                                <label class="col-3"><input type="radio" name="choise">C</label>
                                <label class="col-3"><input type="radio" name="choise">D</label>
                            </div>
                        </div>
                        <!-- cau10 -->
                        <div class="ques">
                            <div class="no-ques">
                                Câu 10
                            </div>
                            <div class="div-img">
                                <span>Input image intro here</span>
                                <input type="file" name="#" accept="image/*">
                            </div>
                            <div class="tick col-12 col-sm-10 row">
                                <label class="col-3"><input type="radio" name="choise">A</label>
                                <label class="col-3"><input type="radio" name="choise">B</label>
                                <label class="col-3"><input type="radio" name="choise">C</label>
                                <label class="col-3"><input type="radio" name="choise">D</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/home-js.js"></script>
    <script>
        new WOW().init();
    </script>
@endsection

@section('footer')
    @parent
@endsection