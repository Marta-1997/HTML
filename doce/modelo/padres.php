<?php

	class padres
	{
		public $direccion;
		public $email_madre;
		public $email_padre;
		public $madre;
		public $padre;
		public $telefono_madre;
		public $telefono_padre;

		/**
		 * @return mixed
		 */
		public function getDireccion ()
		{
			return $this->direccion;
		}

		/**
		 * @param mixed $direccion
		 */
		public function setDireccion ($direccion)
		{
			$this->direccion = $direccion;
		}

		/**
		 * @return mixed
		 */
		public function getEmailMadre ()
		{
			return $this->email_madre;
		}

		/**
		 * @param mixed $email_madre
		 */
		public function setEmailMadre ($email_madre)
		{
			$this->email_madre = $email_madre;
		}

		/**
		 * @return mixed
		 */
		public function getEmailPadre ()
		{
			return $this->email_padre;
		}

		/**
		 * @param mixed $email_padre
		 */
		public function setEmailPadre ($email_padre)
		{
			$this->email_padre = $email_padre;
		}

		/**
		 * @return mixed
		 */
		public function getMadre ()
		{
			return $this->madre;
		}

		/**
		 * @param mixed $madre
		 */
		public function setMadre ($madre)
		{
			$this->madre = $madre;
		}

		/**
		 * @return mixed
		 */
		public function getPadre ()
		{
			return $this->padre;
		}

		/**
		 * @param mixed $padre
		 */
		public function setPadre ($padre)
		{
			$this->padre = $padre;
		}

		/**
		 * @return mixed
		 */
		public function getTelefonoMadre ()
		{
			return $this->telefono_madre;
		}

		/**
		 * @param mixed $telefono_madre
		 */
		public function setTelefonoMadre ($telefono_madre)
		{
			$this->telefono_madre = $telefono_madre;
		}

		/**
		 * @return mixed
		 */
		public function getTelefonoPadre ()
		{
			return $this->telefono_padre;
		}

		/**
		 * @param mixed $telefono_padre
		 */
		public function setTelefonoPadre ($telefono_padre)
		{
			$this->telefono_padre = $telefono_padre;
		}

	}