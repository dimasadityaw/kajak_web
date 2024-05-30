@extends('layouts.app')

@section('title', 'Soal')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Soal</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>{{ isset($question) ? 'Edit Soal Ujian' : 'Buat Soal Baru' }}</h4>
                            </div>
                            <div class="card-body">
                                @php
                                    $alphabet = ['A', 'B', 'C', 'D'];
                                    $correctAnswer = 0;
                                @endphp
                                <form method="POST"
                                    action="{{ !isset($question) ? route('exam.question.store', $exam) : route('exam.question.update', [$exam, $question]) }}">
                                    @csrf
                                    @if (isset($question))
                                        {{ method_field('PUT') }}
                                    @endif
                                    {{-- input name --}}
                                    <div class="form-group">
                                        <label for="question">Pertanyaan</label>
                                        <textarea style="height: 100px" name="question" id="question"
                                            class="form-control @error('question') is-invalid @enderror" required>{{ isset($question) ? $question->question : '' }}</textarea>
                                        @error('question')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    @for ($i = 0; $i < 4; $i++)
                                        <div class="form-group">
                                            <label>Jawaban {{ $alphabet[$i] }}</label>
                                            <textarea style="height: 100px" name="answer[]" class="form-control" required>{{ isset($question) && $question->answer->get($i) ? $question->answer->get($i)->answer : '' }}</textarea>
                                        </div>
                                        @php
                                            if (isset($question) && $question->answer->get($i)->is_correct) {
                                                $correctAnswer = $i;
                                            }
                                        @endphp
                                    @endfor
                                    <div class="form-group">
                                        <label for="correct">Jawaban Benar</label>
                                        <select name="correct" id="correct" class="form-control select2">
                                            @foreach ($alphabet as $a)
                                                <option @if ($alphabet[$correctAnswer] == $a) selected @endif
                                                    value="{{ $a }}">
                                                    {{ $a }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-icon btn-primary float-right">
                                        <i class="fas fa-save mr-2"></i> Simpan
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
