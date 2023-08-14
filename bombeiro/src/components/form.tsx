import { View, Text, StyleSheet } from 'react-native'
import React from 'react'

export const Form = () => {
  return (
    <View style={Styles.container}>
        <View style={Styles.navigation}>
            <Text>Meu Deus</Text>
        </View>
    </View>
  )
}

const Styles = StyleSheet.create({
    container:{
        flex: 1,
    },
    navigation:{
        width: 314,
        height: 371,
        backgroundColor: "#FFF",
        shadowColor: '#000',
        shadowOffset: {width: 4, height: 4},
        shadowOpacity: 0.25,
        shadowRadius: 20,
        flex: 1,
        alignContent: "center",
        justifyContent: "center",
    }
})