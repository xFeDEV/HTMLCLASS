from sqlalchemy.orm import Session
from sqlalchemy import text
from typing import Optional
import logging

from app.schemas.users import UserCreate, UserUpdate

logger = logging.getLogger(__name__)

def create_user(db: Session, user: UserCreate) -> Optional[bool]:
    try:
        query = text("""
            INSERT INTO usuario (
                nombre_completo, identificacion, id_rol,
                correo, pass_hash, tipo_contrato,
                telefono, estado, cod_centro
            ) VALUES (
                :nombre_completo, :identificacion, :id_rol,
                :correo, :pass_hash, :tipo_contrato,
                :telefono, :estado, :cod_centro
            )
        """)
        db.execute(query, user.model_dump())
        db.commit()
        return True
    except Exception as e:
        db.rollback()
        logger.error(f"Error al crear usuario: {e}")
        raise Exception("Error de base de datos al crear el usuario")

def get_user_by_email(db: Session, email: str):
    try:
        query = text("""SELECT id_usuario, nombre_completo, identificacion, id_rol,
                                correo, tipo_contrato,
                                telefono, estado, cod_centro
                     FROM usuario 
                     WHERE correo = :email""")
        result = db.execute(query, {"email": email}).mappings().first()
        return result
    except Exception as e:
        logger.error(f"Error al obtener usuario por email: {e}")
        raise Exception("Error de base de datos al obtener el usuario")
    

def get_user_by_id(db: Session, user_id: int):
    try:
        query = text("""
            SELECT id_usuario, nombre_completo, identificacion, id_rol,
                   correo, tipo_contrato,
                   telefono, estado, cod_centro
            FROM usuario
            WHERE id_usuario = :user_id
        """)
        result = db.execute(query, {"user_id": user_id}).mappings().first()
        return result
    except Exception as e:
        logger.error(f"Error al obtener usuario por id: {e}")
        raise Exception("Error de base de datos al obtener el usuario por id")

def update_user(db: Session, user_id: int, user_update: UserUpdate) -> bool:
    try:
        fields = user_update.model_dump(exclude_unset=True)
        if not fields:
            return False
        set_clause = ", ".join([f"{key} = :{key}" for key in fields])
        fields["user_id"] = user_id

        query = text(f"UPDATE usuario SET {set_clause} WHERE id_usuario = :user_id")
        db.execute(query, fields)
        db.commit()
        return True
    except Exception as e:
        db.rollback()
        logger.error(f"Error al actualizar usuario: {e}")
        raise Exception("Error de base de datos al actualizar el usuario")