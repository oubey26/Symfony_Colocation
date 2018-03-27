<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_19d1f4a9bcb8055557da21d464fd02f8d1ccf7351fc164528495f5f08047cc2c extends Twig_Template
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
        $__internal_2554e454bb51ba7c24f87fadcd545d0086551ab8e5600a643e3e0445e2a413cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2554e454bb51ba7c24f87fadcd545d0086551ab8e5600a643e3e0445e2a413cd->enter($__internal_2554e454bb51ba7c24f87fadcd545d0086551ab8e5600a643e3e0445e2a413cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d17b43bae1bc3302ca5bd16542ea546dd3370ebbf8d24d7c171cbebb18f21481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17b43bae1bc3302ca5bd16542ea546dd3370ebbf8d24d7c171cbebb18f21481->enter($__internal_d17b43bae1bc3302ca5bd16542ea546dd3370ebbf8d24d7c171cbebb18f21481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_2554e454bb51ba7c24f87fadcd545d0086551ab8e5600a643e3e0445e2a413cd->leave($__internal_2554e454bb51ba7c24f87fadcd545d0086551ab8e5600a643e3e0445e2a413cd_prof);

        
        $__internal_d17b43bae1bc3302ca5bd16542ea546dd3370ebbf8d24d7c171cbebb18f21481->leave($__internal_d17b43bae1bc3302ca5bd16542ea546dd3370ebbf8d24d7c171cbebb18f21481_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
