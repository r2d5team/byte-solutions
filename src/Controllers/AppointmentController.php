<?php
namespace App\Controllers;
use App\Models\AppointmentModel;


class AppointmentController {

    public function index(){

      require_once __DIR__ . "/../views/pages/checklistView.php";
      $appointment = (new AppointmentModel())->all();
      foreach ($appointment as $elementAppointment) {
          echo "
          <div class='card' style='width: 18rem;'>
            <div class='card-body'>
              <h5 class='card-title'>{$elementAppointment->name}</h5>
              <h6 class='card-subtitle mb-2 text-muted'>{$elementAppointment->email}</h6>
              <h5 class='card-title'>{$elementAppointment->title}</h5>
              <p class='card-text'> {$elementAppointment->message}</p>
            </div>
          </div>    
          ";
        }
         require_once __DIR__ . "/../views/components/footerChecklist.php";
    }
    public function create(){
        require_once __DIR__ . "/../views/pages/createView.php";
        
    }
    public function read(){
        require_once __DIR__ . "/../views/pages/landingpageView.php";
        
          }
      
    public function update($id){
      
      $appointment = (new AppointmentModel())->all();
      foreach ($appointment as $elementAppointment) {
        if($elementAppointment->id == $id){
          require_once __DIR__ . "/../views/layouts/headbydefault.php";
           echo "
    <h2>Edit Your Query</h2>
    <form method='POST' action='edit.php' class='row'>
        <div class='col-lg-3 col-sm-2'></div>
        <div class='col-lg-6 col-sm-8'>
            <fieldset disabled>
                <div class='mb-3'>
                    <input type='text' class='form-control' name='name' placeholder='{$elementAppointment->name}'>
                </div>
                <div class='mb-3'>
                    <input type='email' class='form-control' name='email' placeholder='{$elementAppointment->email}'>
                </div>
                <div class='mb-3'>
                    <input type='title' class='form-control' name='querytitle' aria-describedby='emailHelpId'
                        placeholder='{$elementAppointment->title}'>
                </div>        
            </fieldset>
            <div class='mb-3'>
                <textarea class='form-control' name='message' rows='3' placeholder='Message...'></textarea>
            </div>
            <button type='submit' class='btn-general'>UPDATE</button>
            <div> OR </div>
            <button class='btn-general'>CANCEL</button>
        </div>
        <div class='col-lg-3 col-sm-2'></div>
    </form>
</body>
</html>";
        }
      }        
    }

    public function store($request){
      $appointmentToSave = new AppointmentModel($request);
      $appointmentToSave->save();
      $this->redirect('/');
    }

    private function redirect(string $url)
    {
      header("Location:{$url}");
    }
}