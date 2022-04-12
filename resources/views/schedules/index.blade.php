<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Schedules!</title>
</head>
<body>
    <div class="container">
        <h1 class="my-3">Schedules!</h1>

        <select id="year-select" class="form-select">
            @for ($i = now()->year; $i > now()->year - 7; $i--)
                <option value="{{ $i }}"{{ $year == $i ? ' selected' : '' }}>{{ $i }}</option>
            @endfor
        </select>

        <ul class="nav nav-tabs my-3">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Schedule</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">KPI</a>
            </li>
        </ul>

        <form action="{{ route('schedules.store', $year) }}" method="POST">
            @csrf

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Key-in</th>
                        <th scope="col">Approval</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Q1</th>
                        <td>
                            <div class="row align-items-center">
                                <div class="col">
                                    <input type="date" name="key_in_starts[1]" class="form-control">
                                </div>
                                <div class="col">
                                    <input type="date" name="key_in_ends[1]" class="form-control">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row align-items-center">
                                <div class="col">
                                    <input type="date" name="approval_starts[1]" class="form-control">
                                </div>
                                <div class="col">
                                    <input type="date" name="approval_ends[1]" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Q2</th>
                        <td>
                            <div class="row align-items-center">
                                <div class="col">
                                    <input type="date" name="key_in_starts[2]" class="form-control">
                                </div>
                                <div class="col">
                                    <input type="date" name="key_in_ends[2]" class="form-control">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row align-items-center">
                                <div class="col">
                                    <input type="date" name="approval_starts[2]" class="form-control">
                                </div>
                                <div class="col">
                                    <input type="date" name="approval_ends[2]" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Q3</th>
                        <td>
                            <div class="row align-items-center">
                                <div class="col">
                                    <input type="date" name="key_in_starts[3]" class="form-control">
                                </div>
                                <div class="col">
                                    <input type="date" name="key_in_ends[3]" class="form-control">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row align-items-center">
                                <div class="col">
                                    <input type="date" name="approval_starts[3]" class="form-control">
                                </div>
                                <div class="col">
                                    <input type="date" name="approval_ends[3]" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Q4</th>
                        <td>
                            <div class="row align-items-center">
                                <div class="col">
                                    <input type="date" name="key_in_starts[4]" class="form-control">
                                </div>
                                <div class="col">
                                    <input type="date" name="key_in_ends[4]" class="form-control">
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row align-items-center">
                                <div class="col">
                                    <input type="date" name="approval_starts[4]" class="form-control">
                                </div>
                                <div class="col">
                                    <input type="date" name="approval_ends[4]" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <button class="btn btn-primary">Save</button>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        const yearSelect = document.querySelector('#year-select');
        
        yearSelect.addEventListener('change', (event) => {
            const year = yearSelect.options[yearSelect.selectedIndex].value;
            // Redirect
            window.location.replace("{{ route('schedules.index', ':year') }}".replace(':year', year));
        });
    </script>
</body>
</html>