#!/bin/bash
#Script para crear gestionar la creacion de un nuevo Proyecto con Laravel
clear
echo 'Script para la creacion de un nuevo Proyecto con Laravel';
sleep 1
#echo 'Procederemos a comprobrar si los repositorios estan actualizados...';
#sudo apt-get update
#sudo apt-get upgrade
opcion=-1
while [ $opcion != 0 ]
do
	./scripts/menu.sh
	read opcion
	if [ $opcion == '1' ]; then
		./scripts/installComposer.sh
	elif [ $opcion == '2' ]; then
		echo ''
		echo 'Proyectos existentes'
		ls -1 -d */
		echo ''
		echo 'Pulse enter para seguir'
		read espera
	elif [ $opcion == '3' ]; then
		echo 'Escriba el nombre del proyecto a crear:'
		read nombreProyecto
		while [ -z $nombreProyecto ]
		do
			echo 'Por favor, introduzca un nombre para el proyecto'
			read nombreProyecto
		done
		if [ -d $nombreProyecto ]; then
			while [ -d $nombreProyecto  ] && [ $nombreProyecto != '0' ]
			do
				echo -e '\e[31mEl Proyecto ya existe\e[0m'
				echo 'Elija otro nombre o pulse 0 para cancelar'
				read nombreProyecto
			done
			export nombreProyecto
			./scripts/createProject.sh
		elif [ ! -d $nombreProyecto ]; then
			export nombreProyecto
			./scripts/createProject.sh
			echo 'Pulse enter para continuar'
		fi
	elif [ $opcion == '0' ]; then
		echo 'Hasta la proximo'
	else
		echo 'Opcion no valida'
		echo 'Pulse enter para seguir'
		read respuesta
	fi
done