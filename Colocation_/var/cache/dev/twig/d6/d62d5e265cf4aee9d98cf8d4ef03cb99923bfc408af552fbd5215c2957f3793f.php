<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_23d024be7772881d9a2541a227a6e37aa89af01f51c3865f79986e5d09253cb0 extends Twig_Template
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
        $__internal_93a9dffe4363beaed247392f16f52df19fd693fb3faa44d55757c359d744091e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93a9dffe4363beaed247392f16f52df19fd693fb3faa44d55757c359d744091e->enter($__internal_93a9dffe4363beaed247392f16f52df19fd693fb3faa44d55757c359d744091e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_d017325af3e08b170f159d365b3eafbee544a6da2fad988dbd223f5f54ba4225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d017325af3e08b170f159d365b3eafbee544a6da2fad988dbd223f5f54ba4225->enter($__internal_d017325af3e08b170f159d365b3eafbee544a6da2fad988dbd223f5f54ba4225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_93a9dffe4363beaed247392f16f52df19fd693fb3faa44d55757c359d744091e->leave($__internal_93a9dffe4363beaed247392f16f52df19fd693fb3faa44d55757c359d744091e_prof);

        
        $__internal_d017325af3e08b170f159d365b3eafbee544a6da2fad988dbd223f5f54ba4225->leave($__internal_d017325af3e08b170f159d365b3eafbee544a6da2fad988dbd223f5f54ba4225_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
