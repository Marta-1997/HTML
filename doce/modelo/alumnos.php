<?php

	class alumnos
	{
		public $id;
		public $estudios;
		public $id_alumno;

		/**
		 * @return mixed
		 */
		public function getId ()
		{
			return $this->id;
		}

		/**
		 * @param mixed $id
		 */
		public function setId ($id)
		{
			$this->id = $id;
		}

		/**
		 * @return mixed
		 */
		public function getEstudios ()
		{
			return $this->estudios;
		}

		/**
		 * @param mixed $estudios
		 */
		public function setEstudios ($estudios)
		{
			$this->estudios = $estudios;
		}

		/**
		 * @return mixed
		 */
		public function getIdAlumno ()
		{
			return $this->id_alumno;
		}

		/**
		 * @param mixed $id_alumno
		 */
		public function setIdAlumno ($id_alumno)
		{
			$this->id_alumno = $id_alumno;
		}


	}