<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_6722475211bdaeb122ef9da90670bbc526dcd6f2fca159e41ee391a1bbc6e247 extends Twig_Template
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
        $__internal_4c1af8013c9bb82789cbd3e973798630b033e30d0efae8fcb72f7c54d1b2c485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c1af8013c9bb82789cbd3e973798630b033e30d0efae8fcb72f7c54d1b2c485->enter($__internal_4c1af8013c9bb82789cbd3e973798630b033e30d0efae8fcb72f7c54d1b2c485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e07c2f84a30e9dbafc1e755811b82ddb3589c79c0657ae48f71e67de2261441c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e07c2f84a30e9dbafc1e755811b82ddb3589c79c0657ae48f71e67de2261441c->enter($__internal_e07c2f84a30e9dbafc1e755811b82ddb3589c79c0657ae48f71e67de2261441c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_4c1af8013c9bb82789cbd3e973798630b033e30d0efae8fcb72f7c54d1b2c485->leave($__internal_4c1af8013c9bb82789cbd3e973798630b033e30d0efae8fcb72f7c54d1b2c485_prof);

        
        $__internal_e07c2f84a30e9dbafc1e755811b82ddb3589c79c0657ae48f71e67de2261441c->leave($__internal_e07c2f84a30e9dbafc1e755811b82ddb3589c79c0657ae48f71e67de2261441c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
