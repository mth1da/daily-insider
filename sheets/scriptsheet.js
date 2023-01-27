//authors: SRIRAJ & TURRA
function verify(){
    var name = document.forms["Inscription"]["name"];
    var prenom= document.forms["Inscription"]["Prenom"];
    var email= document.forms["Inscription"]["email"];
    var mdp =document.forms["Inscription"]["mdp"];

    //réinitialisation des messages d'erreurs
    document.getElementById('erreur').innerHTML="";  
    document.getElementById('mistake').innerHTML="";
    document.getElementById('faute').innerHTML="";    
    document.getElementById('vide').innerHTML="";

    //réinitialisation de la couleur du bord de l'input
    name.style.border="1px solid #ccc";
    prenom.style.border="1px solid #ccc";
    email.style.border="1px solid #ccc";
    mdp.style.border="1px solid #ccc";

    if ((name.value=="") || (!isNaN(name.value))){ //si le prénom n'est pas renseigné ou n'est pas des lettres
        document.getElementById('erreur').innerHTML="<br>Entrez un nom ";  
        name.focus(); 
        name.style.border="2px solid red"
        return false; 
    }
    else if (name.value.length<2){  //si le nom est inférieur à 2 caractères
        document.getElementById('erreur').innerHTML="<br>Le nom doit faire au moins 2 lettres. ";  
        name.focus(); 
        name.style.border="2px solid red"
        return false; 
    }
    else if ((prenom.value=="") || (!isNaN(prenom.value))){ //si le prénom n'est pas renseigné ou n'est pas des lettres
        document.getElementById('mistake').innerHTML="<br>Entrez un prénom";
        prenom.focus(); 
        prenom.style.border="2px solid red"
        return false; 
    }
    else if (prenom.value.length<2){ //si le prénom est inférieur à 2 caractères
        document.getElementById('mistake').innerHTML="<br>Le prénom doit faire au moins 2 lettres.";
        prenom.focus(); 
        prenom.style.border="2px solid red"
        return false; 
    }
    else if (!(email.value).match(/^\w+(\.\w+)?@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/)){ //expression régulière pour matcher une adresse mail
        document.getElementById('faute').innerHTML="<br>Entrez une adresse mail valide";
        email.focus();
        email.style.border="2px solid red";
        return false;
    }
    else if (mdp.value==""){   //si le mot de passe n'est pas renseigné	
        document.getElementById('vide').innerHTML="<br>Entrez un mot de passe";
        mdp.focus();
        mdp.style.border="2px solid red";
        return false;
    }
    else if (mdp.value.length<4){ //si le mot de passe est inférieure à 4 caractères
        document.getElementById('vide').innerHTML="<br>Le mot de passe doit faire au moins 4 caractères";
        mdp.focus();
        mdp.style.border="2px solid red";
        return false;
    }
    else{
        document.getElementById('erreur').innerHTML=""; 
        document.getElementById('mistake').innerHTML="";
        document.getElementById('faute').innerHTML="";    
        document.getElementById('vide').innerHTML="";        
    }
}

function verifymdp(){
    if (mdp.value==""){   //si le mot de passe n'est pas renseigné	
        document.getElementById('rien').innerHTML="<br>Entrez un mot de passe";
        mdp.focus();
        mdp.style.border="2px solid red";
        return false;
    }
    else if (mdp.value.length<4){ //si le mot de passe est inférieure à 4 caractères
        document.getElementById('rien').innerHTML="<br>Le mot de passe doit faire au moins 4 caractères";
        mdp.focus();
        mdp.style.border="2px solid red";
        return false;
    }
    else{  
        document.getElementById('rien').innerHTML="";          
    }
}

function inscrire(){
	document.getElementById("inscription").style.left = "10%";
	document.getElementById("connecter").style.left = "110%";
    document.getElementById('decobouton').style.left = "0%";
}
			 
function connecter(){
	document.getElementById('inscription').style.left= "-100%";
	document.getElementById('connecter').style.left= "10%";
	document.getElementById('decobouton').style.left= "50%";

}

function connection(){
	var mail= document.forms["Connexion"]["mail"];
	var motdp = document.forms["Connexion"]["motdepasse"];
	
        //expression régulière pour matcher une adresse mail ou un pseudo
	if (!(mail.value).match(/^\w+(\.\w+)?@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/) && (!(mail.value).match(/^\w+[0-9]{2}(\-[0-9]{2})?$/))){  
		document.getElementById('er').innerHTML=" Entrez une adresse mail ou un pseudo valide";
		mail.focus();
		mail.style.border="2px solid red";
		return false;
	}
	
	else if (motdp.value==""){ //si le mot de passe n'est pas renseigné	
        document.getElementById('er').innerHTML="";	
		document.getElementById('err').innerHTML=" Entrez votre mot de passe";
		motdp.focus();
		motdp.style.border="2px solid red";
		return false;
	}
	else{
          document.getElementById('er').innerHTML=""; 
          document.getElementById('err').innerHTML="";
	}
}

function show(){
	if (document.getElementById("mdp").type == "password"){
		document.getElementById("mdp").type="text";
	}
	else{
		document.getElementById("mdp").type="password";
	}
}

function montrer(){
	if (document.getElementById("motdepasse").type == "password"){
		document.getElementById("motdepasse").type="text";
	}
	else{
		document.getElementById("motdepasse").type="password";
	}
}