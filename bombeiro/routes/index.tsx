import { createNativeStackNavigator } from "@react-navigation/native-stack";
import Index from "../app/(tabs)";
import Plano from "../app/(tabs)/plano";

const Stack = createNativeStackNavigator()
export default function Routes() {
    return (
        <Stack.Navigator>
            <Stack.Screen
                name="index"
                component={Index}
                options={{
                    headerShown: false
                }}
            />
            <Stack.Screen
                name="plano"
                component={Plano}
                options={{
                    headerShown: false
                }}
            />
        </Stack.Navigator>
    )
}