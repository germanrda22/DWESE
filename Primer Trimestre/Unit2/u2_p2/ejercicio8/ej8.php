<!-- Escribe una función que reciba una cadena y comprueba si es una matrícula válida. Tiene que tener siete caracteres, 
los cuatro primeros números y el resto consonantes mayúsculas. -->

<?php

function matriculaValida($cadena)
{
	if (strlen($cadena) == 7)
	{

		if (is_int(intval($cadena[0])) && is_int(intval($cadena[1])) && is_int(intval($cadena[2])) && is_int(intval($cadena[3])))
		{
			if(esMayuscula($cadena[4]) && esMayuscula($cadena[5]) && esMayuscula($cadena[6]))
			{
				return "Matricula valida";
			}
			else
			{
				return "Matriucla no valida";
			}
		}
		else
		{
			return "Matriucla no valida";
		}			
	}
	else
	{
		return "Matriucla no valida";
	}
}

function esMayuscula($cadena)
{
    return $cadena === strtoupper($cadena);
}

$matricula = "5339HNF";
echo matriculaValida($matricula);