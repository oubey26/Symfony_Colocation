<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_33b750e26a69d41e490b8b9b48593303989d795a114135d3b76a2b8c409ff887 extends Twig_Template
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
        $__internal_355776393f84794edd8d77675d3169f77ef0cfa3d4c6ac2bc2fad7947549f9f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_355776393f84794edd8d77675d3169f77ef0cfa3d4c6ac2bc2fad7947549f9f8->enter($__internal_355776393f84794edd8d77675d3169f77ef0cfa3d4c6ac2bc2fad7947549f9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e29c0fc06295c23201b361f9fcfec3dbffc49e3d11aef66d0e0dffaf53308cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29c0fc06295c23201b361f9fcfec3dbffc49e3d11aef66d0e0dffaf53308cc2->enter($__internal_e29c0fc06295c23201b361f9fcfec3dbffc49e3d11aef66d0e0dffaf53308cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_355776393f84794edd8d77675d3169f77ef0cfa3d4c6ac2bc2fad7947549f9f8->leave($__internal_355776393f84794edd8d77675d3169f77ef0cfa3d4c6ac2bc2fad7947549f9f8_prof);

        
        $__internal_e29c0fc06295c23201b361f9fcfec3dbffc49e3d11aef66d0e0dffaf53308cc2->leave($__internal_e29c0fc06295c23201b361f9fcfec3dbffc49e3d11aef66d0e0dffaf53308cc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
