<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a364a8e103883d0f09c33a14d4de9f88d808ce50f3735c6937aaa05cd787158f extends Twig_Template
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
        $__internal_13de00533ae186013f2e525e7882c6af16fd60c57b2f3352c9c4a385d5e8559f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13de00533ae186013f2e525e7882c6af16fd60c57b2f3352c9c4a385d5e8559f->enter($__internal_13de00533ae186013f2e525e7882c6af16fd60c57b2f3352c9c4a385d5e8559f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_1a4612f22950b071410c6b999bf5aa7a45c51a760f72fa547713a06b7a066a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4612f22950b071410c6b999bf5aa7a45c51a760f72fa547713a06b7a066a37->enter($__internal_1a4612f22950b071410c6b999bf5aa7a45c51a760f72fa547713a06b7a066a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_13de00533ae186013f2e525e7882c6af16fd60c57b2f3352c9c4a385d5e8559f->leave($__internal_13de00533ae186013f2e525e7882c6af16fd60c57b2f3352c9c4a385d5e8559f_prof);

        
        $__internal_1a4612f22950b071410c6b999bf5aa7a45c51a760f72fa547713a06b7a066a37->leave($__internal_1a4612f22950b071410c6b999bf5aa7a45c51a760f72fa547713a06b7a066a37_prof);

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
