<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_04ea4ec453d29d63e73b309297e75c62222a07269cb1217d21274fabf8737ce2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14ba0930af72faeeaad784acd5554bd4a9f8f7daed901da2037cbc0569d8f88a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ba0930af72faeeaad784acd5554bd4a9f8f7daed901da2037cbc0569d8f88a->enter($__internal_14ba0930af72faeeaad784acd5554bd4a9f8f7daed901da2037cbc0569d8f88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_8370bcbae0199ed0111f1651e2a4fb20c50601d42296109facd8383da391cfb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8370bcbae0199ed0111f1651e2a4fb20c50601d42296109facd8383da391cfb6->enter($__internal_8370bcbae0199ed0111f1651e2a4fb20c50601d42296109facd8383da391cfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_14ba0930af72faeeaad784acd5554bd4a9f8f7daed901da2037cbc0569d8f88a->leave($__internal_14ba0930af72faeeaad784acd5554bd4a9f8f7daed901da2037cbc0569d8f88a_prof);

        
        $__internal_8370bcbae0199ed0111f1651e2a4fb20c50601d42296109facd8383da391cfb6->leave($__internal_8370bcbae0199ed0111f1651e2a4fb20c50601d42296109facd8383da391cfb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
