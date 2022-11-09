var empleados = [];
var sueldoN = [];
var diasM = [];
var totalD = [];
var auxilioF = [];
var netoF =[];
var netoC =[];
var deudadoF = [];
var saludF = [];
var j = 11;
while (j > 10) {
  alert("BIENVENIDOS A LA NOMINA DE LA EMPRESA MIGUEL");
  var ingreso = prompt("Va a ingresar a un empleado de la empresa? SI o NO");
  if (ingreso == "si") {
    var nombre = prompt("ingrese el nombre del empleado");
    empleados.push(nombre);

    var sueldo = parseInt(prompt("ingrese el sueldo del empleado"));
    var sueldof = new Intl.NumberFormat().format(sueldo);
    sueldoN.push(sueldof);

    while (sueldo < 1000000) {
      alert("Uju, no puedes ingresar um valor minimo a  1 millon");
      var sueldo = parseInt(prompt("ingrese nuevamente el sueldo sueldo"));
      var sueldos = sueldo;
      sueldoN.shift(sueldo);
      sueldoN.push(sueldos);
      
    }
    console.log(sueldoN);
    var dias = parseInt(prompt("ingrese los dias que trabajo el empleado"));
    while (dias > 30) {
      alert("usted no trabajo todo eso, ingrese nuevamente");
      var dias = parseInt(prompt("ingrese los dias que trabajo"));
      diasM.push(dias);
    }
    diasM.push(dias);
  
     var deudado = sueldo / 30;
     var deudadoC = new Intl.NumberFormat().format(deudado,0)
       deudadoF.push(deudadoC);
      var salud= deudado*4/100;
      var saludC = new Intl.NumberFormat().format(salud,0);
      Math.round(saludC).toFixed(3);
      saludF.push( saludC );
      var total = salud + salud;
      var rond = Math.round(total);
      var roundf = new Intl.NumberFormat().format(rond,0);
      totalD.push(roundf);

      if (sueldo <= 2000000 ) {
        alert("Yuju !! Felicidades tiene auxilio de transporte");
        
        var auxilio = 117172 /30 ;
        var auxiliof = new Intl.NumberFormat().format(auxilio,0);
        auxilioF.push(auxiliof);
        var netoc = deudado - total + auxilio;
        netoC.push(netoc);
       
      }
      var neto = (deudado - total);
      var netoc= new Intl.NumberFormat().format(neto,0);
      netoF.push(netoc);

    continue
  } else if (ingreso != "no") {
    alert("Ojo, solo puede ingresar si o no");
    continue;
  } else {
    break;
  }
}
document.write("<table class='styled-table'>");
document.write("<thead>");
document.write("<tr>");
document.write("<th>Nombre</th>");
document.write("<th>Sueldo basico</th>");
document.write(" <th>Dias trabajados</th>");
document.write("<th>Sueldo devengado</th>");
document.write("<th>Pension</th>");

document.write("<th>Salud</th>");
document.write("<th>Total deduccion</th>");
document.write("<th>Auxilio transporte</th>");
document.write("<th>Neto a pagar</th>");
document.write("</tr>");
document.write("</thead>");
document.write("<tbody>");
document.write("<tr >");
for (var i = 0; i < empleados.length; i++) {
  document.write(
    auxilioF[i]
      ? "<tr class='active-row'>  " +
          "<td>" +
          empleados[i] +
          "</td> " +
          "<td>" +
          sueldoN[i] +
          "</td> " +
          "<td>" +
          diasM[i] +
          "</td> " +
          "<td>" +
          deudadoF[i] +
          "</td> " +
          "<td>" +
          saludF[i] +
          "</td> " +
          "<td>" +
          saludF[i] +
          "</td> " +
          "<td>" +
          totalD[i] +
          "</td> " +
          "<td>" +
          auxilioF[i] +
          "</td> " +
          "<td>" +
          netoC[i] +
          "</td> " +
          "</tr>"
      : "<tr class='active-row'>  " +
          "<td>" +
          empleados[i] +
          "</td> " +
          "<td>" +
          sueldoN[i] +
          "</td> " +
          "<td>" +
          diasM[i] +
          "</td> " +
          "<td>" +
          deudadoF[i] +
          "</td> " +
          "<td>" +
          saludF[i] +
          "</td> " +
          "<td>" +
          saludF[i] +
          "</td> " +
          "<td>" +
          totalD[i] +
          "</td> " +
          "<td>" +
          "No tiene" +
          "</td> " +
          "<td>" +
          netoF[i] +
          "</td> " +
          "</tr>"
  );
}
document.write("</tbody>");
document.write(" </table>");