<?php

use Illuminate\Database\Seeder;

use App\User;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('users')->delete();

          $user= new User();
          $user->id_Usuario=1;
          $user->name="Victor";
          $user->email="vgam@latinmail.com";
          $user->password=bcrypt("12345");
          $user->fecha_Nac="1970-03-04";
          $user->avatar="avatarVictor.png";
          $user->save();

          $user= new User();
          $user->id_Usuario=2;
          $user->name="Anne";
          $user->email="anne@mail.com";
          $user->password=bcrypt("12345");
          $user->fecha_Nac="1970-03-04";
          $user->avatar="avatarAnne.png";
          $user->save();

          $user= new User();
          $user->id_Usuario=3;
          $user->name="Jose";
          $user->email="ibermatica@latinmail.com";
          $user->password=bcrypt("12345");
          $user->fecha_Nac="1970-03-04";
          $user->avatar="avatarJose.png";
          $user->save();

          $user= new User();
          $user->id_Usuario=4;
          $user->name="Samuel";
          $user->email="samuel@latinmail.com";
          $user->password=bcrypt("12345");
          $user->fecha_Nac="1970-03-04";
          $user->avatar="avatarSamuel.jpg";
          $user->save();
    }
}
