<?php

	class usuario
	{
		public $email;
		public $nombre;
		public $pass;

		/**
		 * @return mixed
		 */
		public function getEmail ()
		{
			return $this->email;
		}

		/**
		 * @param mixed $email
		 */
		public function setEmail ($email)
		{
			$this->email = $email;
		}

		/**
		 * @return mixed
		 */
		public function getNombre ()
		{
			return $this->nombre;
		}

		/**
		 * @param mixed $nombre
		 */
		public function setNombre ($nombre)
		{
			$this->nombre = $nombre;
		}

		/**
		 * @return mixed
		 */
		public function getPass ()
		{
			return $this->pass;
		}

		/**
		 * @param mixed $pass
		 */
		public function setPass ($pass)
		{
			$this->pass = $pass;
		}
	}