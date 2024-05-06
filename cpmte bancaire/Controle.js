function verif1() {
numc=Number(document.f.T1.value);
ncin=Number(document.f.T2.value);
nom=document.f.T3.value;
pr=document.f.T4.value;
sd=Number(document.f.T5.value);
if ((lengh.numc!=8)||(lengh.ncin!=8)||(isNaN(numc))||(isNaN(ncin)) ) {alert("num compte ou num cin doit etre compose de 8 chiffre ");return false;}
if ((nom.lengh!=6)||(pr.lengh!=6)) {alert("nom et prenom doit etre au moin 6 caractere ");return false;}
if ((sd<50)||(isNaN(sd))) {alert("solde doit etre numerique et superieur a 50 ");return false;}

  
}