import { StyleSheet, Text, View, TouchableOpacity, } from 'react-native'
import React from 'react'

const Styles = StyleSheet.create({
    textBtn: {
        textAlign: "center",
        fontSize: 20,
        color: "#fff"
    },
    containerBtn: {
        marginTop: 36,
        backgroundColor: "#c21219",
        width: 200,
        justifyContent: "center",
        height: 45,
    }
})

export const FlexBtn = () => {
    return (
        <View>
            <View style={Styles.containerBtn} >
                <Text style={Styles.textBtn}>Entrar</Text>
            </View>
        </View>
    )
}
