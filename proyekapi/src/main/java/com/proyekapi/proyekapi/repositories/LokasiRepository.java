package com.proyekapi.proyekapi.repositories;

import com.proyekapi.proyekapi.entities.Lokasi;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface LokasiRepository extends JpaRepository<Lokasi, Integer> {
}
