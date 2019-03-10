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
          $user->name="Victor";
          $user->email="vgam@latinmail.com";
          $user->password=bcrypt("12345");
          $user->fecha_Nac="1970-03-04";
          $user->avatar="avatarH.jpg";
          $user->save();

          $user= new User();
          $user->name="Anne";
          $user->email="anne@latinmail.com";
          $user->password=bcrypt("12345");
          $user->fecha_Nac="1970-03-04";
          $user->avatar="avatarM.png";
          $user->save();

          $user= new User();
          $user->name="Jose";
          $user->email="ibermatica@latinmail.com";
          $user->password=bcrypt("12345");
          $user->fecha_Nac="1970-03-04";
          $user->avatar="avatarH.jpg";
          $user->save();

          $user= new User();
          $user->name="Samuel";
          $user->email="samuel@latinmail.com";
          $user->password=bcrypt("12345");
          $user->fecha_Nac="1970-03-04";
          $user->avatar="avatarH.jpg";
          $user->save();
    }
}
