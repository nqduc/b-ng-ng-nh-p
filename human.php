<?php
class human {
    public $user;
    public $experience;
    public $education;
    public $skills;
    public $interest;
    public $awards;
    public $reperences;
    public $profile;


    function set_user($user){
        $this->user = $user;
    }
    function get_user(){
        return $this->user;
    }
    

    function set_address($address){
        $this->address = $address;
    }
    function get_address(){
        return $this->address;
    }


    function set_experience($experience){
        $this->experience = $experience;
    }
    function get_Experience(){
        return $this->experience;
    }


    function set_education($education){
        $this->education = $education;
    }
    function get_education(){
        return $this->ducation;
    }


    function set_skills($skills){
        $this->skills = $skills;
    }
    function get_skills(){
        return $this->skills;
    }

    
    function set_awards($awards){
        $this->awards = $awards;
    }
    function get_awards(){
        return $this->awards;
    }


    function set_reperences($reperences){
        $this->reperences = $reperences;
    }
    function get_reperences(){
        return $this->reperences;
    }
  

    function set_profile($profile){
        $this->profile = $profile;
    }
    function get_profile(){
        return $this->profile;
    }
}
?>