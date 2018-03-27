<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8b9fa50c8f508b513712287734ece1571ab91a4d8117b22ec6d49f126f38ce93 extends Twig_Template
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
        $__internal_3dbf943d4364f20dab46d4f72a09b0bacfb5e6f31a78dcfd4f1e3a1795a37149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dbf943d4364f20dab46d4f72a09b0bacfb5e6f31a78dcfd4f1e3a1795a37149->enter($__internal_3dbf943d4364f20dab46d4f72a09b0bacfb5e6f31a78dcfd4f1e3a1795a37149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_4c363b1f1fa600f10c682d055c632ca7a7691de847c435b3df8a7ba7a8da2080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c363b1f1fa600f10c682d055c632ca7a7691de847c435b3df8a7ba7a8da2080->enter($__internal_4c363b1f1fa600f10c682d055c632ca7a7691de847c435b3df8a7ba7a8da2080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3dbf943d4364f20dab46d4f72a09b0bacfb5e6f31a78dcfd4f1e3a1795a37149->leave($__internal_3dbf943d4364f20dab46d4f72a09b0bacfb5e6f31a78dcfd4f1e3a1795a37149_prof);

        
        $__internal_4c363b1f1fa600f10c682d055c632ca7a7691de847c435b3df8a7ba7a8da2080->leave($__internal_4c363b1f1fa600f10c682d055c632ca7a7691de847c435b3df8a7ba7a8da2080_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
