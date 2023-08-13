1. `laravel new forpdf`
2. `composer require barryvdh/laravel-dompdf`
3. `php artisan make:controller PDFController`
4.
```
   php artisan tinker
    => User::factory()->count(10)->create()
```
5. `PDFController.php`
```
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $users = User::get();
        $data = [
            'title' => 'Welcome to Hell',
            'date' => date('m/d/Y'),
            'users' => $users,
        ];

        $pdf = PDF::loadView('mypdf', $data);
        return $pdf->stream();
    }
}
```
6. `web.php`
```
use App\Http\Controllers\PDFController;
Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
```
8. `mypdf.blade.php`
```
<h1> {{ $title }} </h1>
    <p> {{ $date }} </p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt nulla dolores, provident fuga repellat hic
        pariatur ipsum possimus quisquam suscipit liber?</p>
    
    <table border="1px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th> {{ $user->id }} </th>
                    <td> {{ $user->name }} </td>
                    <td> {{ $user->email }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
```
